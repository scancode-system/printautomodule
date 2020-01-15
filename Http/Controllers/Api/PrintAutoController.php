<?php

namespace Modules\PrintAuto\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PrintAuto\Services\PrintAutoService;
use Modules\Order\Entities\Order;

class PrintAutoController extends Controller
{


    public function print(Order $order)
    {
        $print_service = new PrintAutoService($order);
        $print_service->run();
    }

}
