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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pipelines = Pipeline::all();
      return $this->sendResponse($pipelines);
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
          'name' => 'required|unique:pipelines,name,NULL,id,deleted_at,NULL',
          'score' => 'numeric'
      ]);
      $pipeline = new Pipeline([
          'id' => Str::uuid(),
          'name' => $request->get('name'),
          'score' => $request->get('score') ?? 0.0,
      ]);
      $pipeline->save();
      return $this->sendResponse($pipeline);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        return $this->sendResponse($pipeline);
      } else {
        return $this->sendError(["message" => "Pipeline not found"], 404);
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
          'name' => 'required|unique:pipelines,name',
          'score' => 'numeric'
      ]);
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        $pipeline->name = $request->get('name');
        $pipeline->score = $request->get('score') ?? 0.0;
        $pipeline->save();
        return $this->sendResponse($pipeline);
      } else {
        return $this->sendError(["message" => "Pipeline not found"], 404);
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
      $pipeline = Pipeline::find($id);
      if ($pipeline) {
        $pipeline = $pipeline->delete();
        return $this->sendResponse($pipeline);
      } else {
        return $this->sendError(["message" => "Pipeline not found"], 404);
      }
    }
}
