<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\Role;

class APIRoleController extends APIBaseController
{
    public function get_roles() {
      $roles = Role::all();
      return $this->send_response($roles);
    }
}
