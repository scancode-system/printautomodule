<?php

namespace Modules\PrintAuto\Repositories;

use Modules\PrintAuto\Entities\SettingPrintAuto;


class SettingPrintAutoRepository
{
	// CREATES
	public static function init(){
		return SettingPrintAuto::create([]);
	}

	// LOADS
	public static function load(){
		return $setting_pdf = SettingPrintAuto::first();
	}

	// UPDATES
	public static function update($data){
		(SettingPrintAuto::first())->update($data);
	}


	// DESTOY
	public static function end(){
		return SettingPrintAuto::truncate();
	}

}
