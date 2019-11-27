<?php

namespace Modules\PrintAuto\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PrintAuto\Http\Requests\SettingPrintAutoRequest;
use Modules\PrintAuto\Repositories\SettingPrintAutoRepository;

class SettingPrintAutoController extends Controller
{

    public function update(SettingPrintAutoRequest $request)
    {
        SettingPrintAutoRepository::update($request->all());
        return back()->with('success', 'Configuração de impressões.');
    }

}
