<?php

namespace Modules\PrintAuto\Services;

use Modules\PrintAuto\Jobs\PrintAutoJob;
use Modules\Pdf\Services\PDFService;
use Modules\Order\Entities\Order;

class PrintAutoService
{

	private $order;

	public function __construct(Order $order)
	{
		$this->order = $order;
	}

	public function run(){
		$pdf_service = new PDFService($this->order);
		$pdf_service->makePdf();
		PrintAutoJob::dispatch($pdf_service->path());
	}

}
