<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\Role;
use Illuminate\Http\Request;

class APIRoleController extends APIBaseController
{
    /**
     * @group Roles
     * @header Authorization Bearer {token}
     * @authenticated
     * @responseFile status=201 storage/responses/roles.get.json
     */
    public function getRoles() {
      $roles = Role::all();
      return $this->sendResponse($roles);
    }
}
