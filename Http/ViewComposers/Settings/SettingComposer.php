<?php

namespace Modules\PrintAuto\Http\ViewComposers\Settings;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\PrintAuto\Repositories\SettingPrintAutoRepository;


class SettingComposer extends ServiceComposer {

    private $setting_print_auto;

    public function assign($view){
        $this->settingPrintAuto();
    }


    private function settingPrintAuto(){
        $this->setting_print_auto = SettingPrintAutoRepository::load();
    }


    public function view($view){
        $view->with('setting_print_auto', $this->setting_print_auto);
    }

}