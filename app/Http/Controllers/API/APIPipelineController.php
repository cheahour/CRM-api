<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\Pipeline;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIPipelineController extends APIBaseController
{
    public function index()
    {
      $pipelines = Pipeline::all();
      return $this->send_response($pipelines);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|unique:pipelines,name,NULL,id,deleted_at,NULL',
      ]);
      $pipeline = new Pipeline([
          'id' => Str::uuid(),
          'name' => $request->get('name'),
      ]);
      $pipeline->save();
      return $this->send_response($pipeline);
    }

    public function show($id)
    {
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        return $this->send_response($pipeline);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Pipeline"]));
      }
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|unique:pipelines,name',
      ]);
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        $pipeline->name = $request->get('name');
        $pipeline->save();
        return $this->send_response($pipeline);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Pipeline"]));
      }
    }

    public function destroy($id)
    {
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        $pipeline = $pipeline->delete();
        return $this->send_response($pipeline);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Pipeline"]));
      }
    }
}
