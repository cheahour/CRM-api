<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\APIBaseController;
use App\Models\ExistingProvider;
use Illuminate\Http\Request;
use Str;

class APIExistingProviderController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = ExistingProvider::all();
        return $this->send_response($providers);
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
            "name" => "required|unique:existing_providers,name,NULL,id,deleted_at,NULL",
        ]);
        $provider = new ExistingProvider([
            "id" => Str::uuid(),
            "name" => $request->get("name"),
        ]);
        $provider->save();
        return $this->send_response($provider);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provider = ExistingProvider::find($id);
        if ($provider) {
            return $this->send_response($provider);
        } else {
            return $this->send_error(__("custom_error.data_not_found", ["object" => "Existing Provider"]));
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
            'name' => 'required|unique:existing_providers,name',
        ]);
        $provider = ExistingProvider::find($id);
        if ($provider) {
            $provider->name = $request->get("name");
            $provider->save();
            return $this->send_response($provider);
        } else {
            return $this->send_error(__("custom_error.data_not_found", ["object" => "Existing Provider"]));
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
        $provider = ExistingProvider::find($id);
        if ($provider) {
            $provider = $provider->delete();
            return $this->send_response($provider);
        } else {
            return $this->send_error(__(
                "custom_error.data_not_found",
                ["object" => "Existing Provider"]
            ));
        }
    }
}
