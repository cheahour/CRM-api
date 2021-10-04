<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\KpiActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIKpiActivityController extends APIBaseController
{
    /**
     * @group KPI Activities
     * @header Authorization Bearer {token}
     * @authenticated
     * @responseFile status=201 storage/responses/settings.get.json
     */
    public function index()
    {
      $kpi_activities = KpiActivity::all();
      return $this->sendResponse($kpi_activities);
    }

    /**
     * @group KPI Activities
     * @header Authorization Bearer {token}
     * @authenticated
     * @bodyParam   name    string  required
     * @responseFile status=201 storage/responses/setting.get.json
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|unique:kpi_activities,name,NULL,id,deleted_at,NULL',
      ]);
      $kpi_activity = new KpiActivity([
          'id' => Str::uuid(),
          'name' => $request->get('name')
      ]);
      $kpi_activity->save();
      return $this->sendResponse($kpi_activity);
    }

    /**
     * @group KPI Activities
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @responseFile status=201 storage/responses/setting.get.json
     */
    public function show($id)
    {
      $kpi_activity = KpiActivity::find($id);
      if ($kpi_activity) {
        return $this->sendResponse($kpi_activity);
      } else {
        return $this->sendError(["message" => "KpiActivity not found"], 404);
      }
    }

    /**
     * @group KPI Activities
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @bodyParam   name    string  required
     * @response 201 true
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|unique:kpi_activities,name',
      ]);
      $kpi_activity = KpiActivity::find($id);
      if ($kpi_activity) {
        $kpi_activity->name = $request->get('name');
        $kpi_activity->save();
        return $this->sendResponse($kpi_activity);
      } else {
        return $this->sendError(["message" => "KpiActivity not found"], 404);
      }
    }

    /**
     * @group KPI Activities
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @response 201 true
     */
    public function destroy($id)
    {
      $kpi_activity = KpiActivity::find($id);
      if ($kpi_activity) {
        $kpi_activity = $kpi_activity->delete();
        return $this->sendResponse($kpi_activity);
      } else {
        return $this->sendError(["message" => "KpiActivity not found"], 404);
      }
    }
}
