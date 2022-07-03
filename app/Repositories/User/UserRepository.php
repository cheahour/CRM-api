<?php

namespace App\Repositories\User;

use App\Enums\UserRoleType;
use App\Repositories\User\UserRepositoryInterface;
use App\Http\Resources\User\UserResource;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function get_account()
    {
        $user = auth()->user();
        if ($user) {
            return $user;
        }
    }

    public function get_sale_admins(Request $request)
    {
        $limit = $request->query("limit");
        $role = Role::whereName(__("user_role.sale_admin"))->first();
        if ($role) {
            $dsms = User::with("role")
                ->where("role_id", "=", $role->id)
                ->orderBy("name")
                ->paginate($limit);
            return $dsms;
        }
        return [];
    }

    public function get_dsms(Request $request)
    {
        $limit = $request->query("limit");
        $role = Role::whereName(__("user_role.dsm"))->first();
        if ($role) {
            $dsms = User::with("role")
                ->where("role_id", "=", $role->id)
                ->orderBy("name")
                ->paginate($limit);
            return $dsms;
        }
        return [];
    }

    public function get_sales(Request $request)
    {
        $dsm_id = $request->query("dsm-id");
        $limit = $request->query("limit") ?? 20;
        $role = Role::whereName(__("user_role.sale"))->first();
        if ($role) {
            if ($dsm_id) {
                $sales = User::where("user_id", "=", $dsm_id)
                    ->orderBy("name")
                    ->where("role_id", "=", $role->id)
                    ->with("role")
                    ->paginate($limit);
                return $sales;
            }
            $sales = User::where("role_id", "=", $role->id)
                ->orderBy("name")
                ->with("role")
                ->paginate($limit);
            return $sales;
        }
        return [];
    }

    public function create_user(Request $request)
    {
        $role = Role::find($request->get("role_id"));
        if ($role) {
            $user_id = $request->get("user_id");
            $user = new User([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'user_id' => $user_id,
                "is_default" => $request->get("is_default"),
            ]);
            $user->role()->associate($role);
            $user->save();
            return new UserResource($user);
        }
        return null;
    }

    function update_user(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());
            return $user;
        }
        return null;
    }

    public function delete_user($request)
    {
        $delete_user = User::find($request->get("delete_user_id"));
        $inherited_user = User::find($request->get("user_id"));
        if ($delete_user && $inherited_user) {
            $role = UserRoleType::fromValue($delete_user->role->name);
            if ($role->is(UserRoleType::DSM)) {
                $delete_user
                    ->sales()
                    ->each(function ($sale) use ($delete_user, $inherited_user) {
                        if ($sale->user_id == $delete_user->id) {
                            $sale->update(["user_id" => $inherited_user->id]);
                        }
                    });
                $delete_user
                    ->delete();
                return true;
            } else if ($role->is(UserRoleType::Sale)) {
                $delete_user
                    ->customers()
                    ->update(["user_id" => $inherited_user->id]);
                $delete_user
                    ->delete();
                return true;
            }
        }
    }
}
