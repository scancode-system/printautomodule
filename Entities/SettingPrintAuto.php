<?php

namespace Modules\PrintAuto\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingPrintAuto extends Model
{
	protected $table = 'setting_print_auto';
	protected $fillable = ['id', 'number_copies', 'auto'];
}
