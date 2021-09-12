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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $territories = Territory::all();
        return $this->sendResponse($territories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $territory = Territory::find($id);
      if ($territory) {
        return $this->sendResponse($territory);
      } else {
        return $this->sendError(["message" => "Territory not found"], 404);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        return $this->sendError(["message" => "Territory not found"], 404);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $territory = Territory::find($id);
      if ($territory) {
        $territory = $territory->delete();
        return $this->sendResponse($territory);
      } else {
        return $this->sendError(["message" => "Territory not found"], 404);
      }
    }
}
