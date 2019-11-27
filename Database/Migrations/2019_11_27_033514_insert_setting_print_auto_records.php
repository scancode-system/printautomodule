<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\PrintAuto\Repositories\SettingPrintAutoRepository;

class InsertSettingPrintAutoRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       SettingPrintAutoRepository::init();
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SettingPrintAutoRepository::end();
    }
}
