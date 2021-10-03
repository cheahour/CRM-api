<?php

namespace App\Http\Controllers\API;

use App\Models\Package;
use App\Http\Controllers\API\APIBaseController;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIPackageController extends APIBaseController
{
    /**
     * @group Packages
     * @header Authorization Bearer {token}
     * @authenticated
     * @responseFile status=201 storage/responses/settings.get.json
     */
    public function index() {
        $packages = Package::all();
        return $this->sendResponse($packages);
    }

    /**
     * @group Packages
     * @header Authorization Bearer {token}
     * @authenticated
     * @bodyParam   name    string  required
     * @responseFile status=201 storage/responses/setting.get.json
     */
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

    /**
     * @group Packages
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @responseFile status=201 storage/responses/setting.get.json
     */
    public function show($id)
    {
      $package = Package::find($id);
      if ($package) {
        return $this->sendResponse($package);
      } else {
        return $this->sendError(["message" => "Package not found"], 404);
      }
    }

    /**
     * @group Packages
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @bodyParam   name    string  required
     * @response 201 true
     */
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
          return $this->sendError(["message" => "Package not found"], 404);
        }
    }

    /**
     * @group Packages
     * @header Authorization Bearer {token}
     * @authenticated
     * @param  int  $id
     * @response 201 true
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        if ($package) {
          $package = $package->delete();
          return $this->sendResponse($package);
        } else {
          return $this->sendError(["message" => "Package not found"], 404);
        }
    }
}
