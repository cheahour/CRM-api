<?php

namespace App\Http\Controllers\API;

use App\Models\Package;
use App\Http\Controllers\API\APIBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIPackageController extends APIBaseController
{
    public function index() {
        $packages = Package::all();
        return $this->send_response($packages);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:packages,name,NULL,id,deleted_at,NULL',
        ]);
        $package = new Package([
            'id' => Str::uuid(),
            'name' => $request->get('name')
        ]);
        $package->save();
        return $this->send_response($package);
    }

    public function show($id)
    {
      $package = Package::find($id);
      if ($package) {
        return $this->send_response($package);
      } else {
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Package"]));
      }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:packages,name',
        ]);
        $package = Package::find($id);
        if ($package) {
            $package->name = $request->get('name');
            $package->save();
            return $this->send_response($package);
        }
        else {
            return $this->send_error(__("custom_error.data_not_found", ["object" => "Package"]));
        }
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        if ($package) {
            $package = $package->delete();
            return $this->send_response($package);
        } else {
            return $this->send_error(__("custom_error.data_not_found", ["object" => "Package"]));
        }
    }
}
