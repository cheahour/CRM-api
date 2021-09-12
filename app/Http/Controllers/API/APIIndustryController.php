<?php

namespace App\Http\Controllers\API;

use App\Models\Industry;
use App\Http\Controllers\API\APIBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIIndustryController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::all();
        return $this->sendResponse($industries);
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
          'name' => 'required|unique:industries,name',
      ]);
      $industry = new Industry([
          // 'id' => Str::uuid(),
          'name' => $request->get('name')
      ]);
      $industry->save();
      return $this->sendResponse($industry);
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
          'name' => 'required|unique:industries,name',
      ]);
      $industry = Industry::find($id);
      if ($industry) {
        $industry->name = $request->get('name');
        $industry->save();
        return $this->sendResponse($industry);
      } else {
        return $this->sendError(["message" => "Industry not found"], 404);
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
      $industry = Industry::find($id);
      if ($industry) {
        $industry = $industry->delete();
        return $this->sendResponse($industry);
      } else {
        return $this->sendError(["message" => "Industry not found"], 404);
      }
    }
}
