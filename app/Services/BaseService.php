<?php

namespace App\Services;

use Carbon\Carbon;

class BaseService
{

  public function currentDatetime()
  {
    $time = Carbon::now();
    return $time->toDateTimeString();
  }

}
