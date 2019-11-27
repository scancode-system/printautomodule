<?php

namespace Modules\PrintAuto\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\PrintAuto\Repositories\SettingPrintAutoRepository;
use Modules\Order\Entities\Order;


class PrintAutoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $path;
    private $copies;

    public function __construct($path)
    {
        $this->path = $path;
        $this->copies = (SettingPrintAutoRepository::load())->number_copies;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //dd('java -jar ' . base_path('/Modules/PrintAuto/Resources/assets/pdfbox-app-2.0.8.jar') . ' PrintPDF -silentPrint ' . $this->path);
        for($i = 0; $i < $this->copies; $i++){
            exec('java -jar ' . base_path('/Modules/PrintAuto/Resources/assets/pdfbox-app-2.0.8.jar') . ' PrintPDF -silentPrint ' . $this->path);
        }
    }
}
