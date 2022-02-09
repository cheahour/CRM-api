<?php

namespace App\Http\Controllers\API;

use App\Models\Industry;
use App\Http\Controllers\API\APIBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIIndustryController extends APIBaseController
{
    public function index()
    {
        $industries = Industry::all();
        return $this->send_response($industries);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|unique:industries,name,NULL,id,deleted_at,NULL',
      ]);
      $industry = new Industry([
          'id' => Str::uuid(),
          'name' => $request->get('name')
      ]);
      $industry->save();
      return $this->send_response($industry);
    }

    public function show($id)
    {
      $industry = Industry::find($id);
      if ($industry) {
        return $this->send_response($industry);
      }
      return $this->send_error(__("custom_error.data_not_found", ["object" => "Industry"]));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required|unique:industries,name',
      ]);
      $industry = Industry::find($id);
      if ($industry) {
        $industry->name = $request->get('name');
        $industry->save();
        return $this->send_response($industry);
      }
      return $this->send_error(__("custom_error.data_not_found", ["object" => "Industry"]));
    }

    public function destroy($id)
    {
      $industry = Industry::find($id);
      if ($industry) {
        $industry = $industry->delete();
        return $this->send_response($industry);
      }
      return $this->send_error(__("custom_error.data_not_found", ["object" => "Industry"]));
    }
}
