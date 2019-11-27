<?php

namespace Modules\PrintAuto\Observers;

use Modules\Order\Entities\Order;
use Modules\Order\Entities\Status;
use Modules\PrintAuto\Services\PrintAutoService;
use Modules\PrintAuto\Repositories\SettingPrintAutoRepository;

class OrderObserver
{

	public function updated(Order $order)
	{
		if((SettingPrintAutoRepository::load())->auto){
			if($order->isDirty('status_id')){
				if($order->status_id == STATUS::COMPLETED){
					$print_service = new PrintAutoService($order);
					$print_service->run();
				} 
			}
		}
	}

}
