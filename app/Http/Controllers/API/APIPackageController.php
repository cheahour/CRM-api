<?php

namespace App\Http\Controllers\API;

use App\Models\Package;
use App\Http\Controllers\API\APIBaseController;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIPackageController extends APIBaseController
{
    public function index() {
        $packages = Package::all();
        return $this->sendResponse($packages);
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
        return $this->sendResponse($package);
    }

    public function show($id)
    {
      $package = Package::find($id);
      if ($package) {
        return $this->sendResponse($package);
      } else {
        return $this->sendError("Package not found");
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
          return $this->sendResponse($package);
        } else {
          return $this->sendError("Package not found");
        }
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        if ($package) {
          $package = $package->delete();
          return $this->sendResponse($package);
        } else {
          return $this->sendError("Package not found");
        }
    }
}
