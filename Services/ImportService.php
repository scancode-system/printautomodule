<?php

namespace Modules\PrintAuto\Services;

use Modules\PrintAuto\Repositories\SettingPrintAutoRepository;

class ImportService {

    public function setting($data)
    {
        SettingPrintAutoRepository::update($data);
    }

    public function records()
    {

    }

}
