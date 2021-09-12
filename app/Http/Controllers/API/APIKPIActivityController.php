<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\KPIActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIKPIActivityController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kpi_activities = KPIActivity::all();
      return $this->sendResponse($kpi_activities);
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
          'name' => 'required|unique:k_p_i_activities,name,NULL,id,deleted_at,NULL',
      ]);
      $kpi_activity = new KPIActivity([
          'id' => Str::uuid(),
          'name' => $request->get('name')
      ]);
      $kpi_activity->save();
      return $this->sendResponse($kpi_activity);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $kpi_activity = KPIActivity::find($id);
      if ($kpi_activity) {
        return $this->sendResponse($kpi_activity);
      } else {
        return $this->sendError(["message" => "KPIActivity not found"], 404);
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
          'name' => 'required|unique:k_p_i_activities,name',
      ]);
      $kpi_activity = KPIActivity::find($id);
      if ($kpi_activity) {
        $kpi_activity->name = $request->get('name');
        $kpi_activity->save();
        return $this->sendResponse($kpi_activity);
      } else {
        return $this->sendError(["message" => "KPIActivity not found"], 404);
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
      $kpi_activity = KPIActivity::find($id);
      if ($kpi_activity) {
        $kpi_activity = $kpi_activity->delete();
        return $this->sendResponse($kpi_activity);
      } else {
        return $this->sendError(["message" => "KPIActivity not found"], 404);
      }
    }
}
