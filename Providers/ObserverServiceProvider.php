<?php

namespace Modules\PrintAuto\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Order\Entities\Order;
use Modules\PrintAuto\Observers\OrderObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		Order::observe(OrderObserver::class);
	}

	public function register() {
        //
	}

}
