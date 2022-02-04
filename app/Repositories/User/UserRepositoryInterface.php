<?php

namespace App\Repositories\User;

use Illuminate\Http\Request;

interface UserRepositoryInterface {
    public function get_account();
    public function get_dsms(Request $request);
    public function get_sales(Request $request);
    public function create_user(Request $request);
    public function update_user(Request $request, $id);
    public function delete_user($id);
}
