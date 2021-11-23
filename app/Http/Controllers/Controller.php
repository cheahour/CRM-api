<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as APIBaseController;

class Controller extends APIBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
