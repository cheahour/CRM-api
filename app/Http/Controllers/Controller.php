<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as APIBaseController;

/**
 * @OA\Info(
 *    title="Today CRM API Documents",
 *    version="1.0.0",
 * )
 */
class Controller extends APIBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
