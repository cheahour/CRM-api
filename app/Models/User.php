<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Str;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use HasFactory,
        Notifiable,
        HasApiTokens,
        Authenticatable,
        Authorizable,
        Uuids,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_id',
        'role',
        'is_default',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public static function default_dsm()
    {
        return static::where('is_default', '=', true)
            ->where("email", "=", __("user_account.anonymous_email"))
            ->first();
    }

    public static function dsms()
    {
        $dsm_role = Role::whereName(__("user_role.dsm"))->first();
        return static::where("role_id", "=", $dsm_role->id)
            ->orderBy("name")
            ->get();
    }

    public static function sales()
    {
        $sale_role = Role::whereName(__("user_role.sale"))->first();
        return static::with("customers")
            ->where("role_id", "=", $sale_role->id)
            ->get();
    }

    public static function sales_based_on_dsm(String $id)
    {
        $sale_role = Role::whereName(__("user_role.sale"))->first();
        return static::where('user_id', '=', $id)
            ->where("role_id", "=", $sale_role->id)
            ->get();
    }
}
