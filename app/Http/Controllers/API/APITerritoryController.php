<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\Territory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APITerritoryController extends APIBaseController
{
    public function index()
    {
        $territories = Territory::all();
        return $this->send_response($territories);
    }

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
      return $this->send_response($territory);
    }

    public function show($id)
    {
      $territory = Territory::find($id);
      if ($territory) {
        return $this->send_response($territory);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Territory"]));
      }
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|unique:territories,name',
      ]);
      $territory = Territory::find($id);
      if ($territory) {
        $territory->name = $request->get('name');
        $territory->save();
        return $this->send_response($territory);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Territory"]));
      }
    }

    public function destroy($id)
    {
      $territory = Territory::find($id);
      if ($territory) {
        $territory = $territory->delete();
        return $this->send_response($territory);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Territory"]));
      }
    }
}
