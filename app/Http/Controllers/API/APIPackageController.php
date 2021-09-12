<?php

namespace App\Http\Controllers\API;

use App\Models\Package;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIPackageController extends APIBaseController
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     * curl --user admin:admin localhost/project/api/v1/pages
     */
    public function index() {
        $packages = Package::all();
        return $this->sendResponse($packages);
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
            'name' => 'required|unique:packages,name',
        ]);
        $package = new Package([
            'id' => Str::uuid(),
            'name' => $request->get('name')
        ]);
        $package->save();
        return $this->sendResponse($package);
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
            'name' => 'required',
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
