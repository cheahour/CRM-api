<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIBaseController;
use App\Models\Pipeline;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIPipelineController extends APIBaseController
{
    /**
     * @group Pipelines
     * @header Authorization Bearer {token}
     * @authenticated
     * @responseFile status=201 storage/responses/pipelines.get.json
     */
    public function index()
    {
      $pipelines = Pipeline::all();
      return $this->sendResponse($pipelines);
    }

    /**
     * @group Pipelines
     * @header Authorization Bearer {token}
     * @authenticated
     * @bodyParam   name    string  required
     * @responseFile status=201 storage/responses/pipeline.get.json
     */
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
      return $this->sendResponse($pipeline);
    }

    /**
     * @group Pipelines
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @responseFile status=201 storage/responses/pipeline.get.json
     */
    public function show($id)
    {
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        return $this->sendResponse($pipeline);
      } else {
        return $this->sendError("Pipeline not found");
      }
    }

    /**
     * @group Pipelines
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @bodyParam   name    string  required
     * @response 201 true
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|unique:pipelines,name',
      ]);
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        $pipeline->name = $request->get('name');
        $pipeline->save();
        return $this->sendResponse($pipeline);
      } else {
        return $this->sendError("Pipeline not found");
      }
    }

    /**
     * @group Pipelines
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @response 201 true
     */
    public function destroy($id)
    {
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        $pipeline = $pipeline->delete();
        return $this->sendResponse($pipeline);
      } else {
        return $this->sendError("Pipeline not found");
      }
    }
}
