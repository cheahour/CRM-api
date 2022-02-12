<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\APIBaseController;
use App\Http\Resources\KpiActivity\KpiActivityResource;
use App\Models\KPIActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIKPIActivityController extends APIBaseController
{
    public function index()
    {
      $kpi_activities = KPIActivity::all();
      return $this->send_response($kpi_activities);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|unique:kpi_activities,name,NULL,id,deleted_at,NULL',
          'score' => 'numeric',
      ]);
      $kpi_activity = new KPIActivity([
        'id' => Str::uuid(),
        'name' => $request->get('name'),
        'score' => $request->get('score') ?? 0.0
      ]);
      $kpi_activity->save();
      return $this->send_response(new KpiActivityResource($kpi_activity));
    }

    public function show($id)
    {
      $kpi_activity = KPIActivity::find($id);
      if ($kpi_activity) {
        return $this->send_response($kpi_activity);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Kpi activity"]));
      }
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required',
          'score' => 'numeric',
      ]);
      $kpi_activity = KPIActivity::find($id);
      if ($kpi_activity) {
        if (!(KPIActivity::where("name", "=", $request->get("name"))->withTrashed()->count() > 1)) {
            $kpi_activity->name = $request->get('name');
            $kpi_activity->score = $request->get('score');
            $kpi_activity->save();
            return $this->send_response(new KpiActivityResource($kpi_activity));
        }
        return $this->send_error(__("custom_error.data_already_existed", ["object" => "Kpi activity"]), [], 500);
      }
      return $this->send_error(__("custom_error.data_not_found", ["object" => "Either kpi activity or pipeline"]));
    }

    public function destroy($id)
    {
      $kpi_activity = KPIActivity::find($id);
      if ($kpi_activity) {
        $kpi_activity = $kpi_activity->delete();
        return $this->send_response($kpi_activity);
      }
      return $this->send_error(__("custom_error.data_not_found", ["object" => "Kpi activity"]));
    }
}
