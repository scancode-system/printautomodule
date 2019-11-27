<?php

namespace Modules\PrintAuto\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\PrintAuto\Http\ViewComposers\Settings\SettingComposer;


class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
		// setting
		View::composer('printauto::loader.settings.body', SettingComposer::class);
	}

	public function register() {
        //
	}

}
