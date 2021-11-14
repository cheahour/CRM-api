<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\Territory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APITerritoryController extends APIBaseController
{
    /**
     * @group Territories
     * @header Authorization Bearer {token}
     * @authenticated
     * @responseFile status=201 storage/responses/settings.get.json
     */
    public function index()
    {
        $territories = Territory::all();
        return $this->sendResponse($territories);
    }

    /**
     * @group Territories
     * @header Authorization Bearer {token}
     * @authenticated
     * @bodyParam   name    string  required
     * @responseFile status=201 storage/responses/setting.get.json
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|unique:territories,name,NULL,id,deleted_at,NULL',
      ]);
      $territory = new Territory([
          'id' => Str::uuid(),
          'name' => $request->get('name')
      ]);
      $territory->save();
      return $this->sendResponse($territory);
    }

    /**
     * @group Territories
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @responseFile status=201 storage/responses/setting.get.json
     */
    public function show($id)
    {
      $territory = Territory::find($id);
      if ($territory) {
        return $this->sendResponse($territory);
      } else {
        return $this->sendError("Territory not found");
      }
    }

    /**
     * @group Territories
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @bodyParam   name    string  required
     * @response 201 true
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|unique:territories,name',
      ]);
      $territory = Territory::find($id);
      if ($territory) {
        $territory->name = $request->get('name');
        $territory->save();
        return $this->sendResponse($territory);
      } else {
        return $this->sendError("Territory not found");
      }
    }

    /**
     * @group Territories
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @response 201 true
     */
    public function destroy($id)
    {
      $territory = Territory::find($id);
      if ($territory) {
        $territory = $territory->delete();
        return $this->sendResponse($territory);
      } else {
        return $this->sendError("Territory not found");
      }
    }
}
