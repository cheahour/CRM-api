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
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use HasFactory, Notifiable, HasApiTokens, Authenticatable, Authorizable, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'user_id',
        'role'
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

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
        parent::boot();
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::creating(function($item) {

        });

        /**
         * Write code on Method
         *
         * @return response()
         */
        static::created(function($item) {

        });

        /**
         * Write code on Method
         *
         * @return response()
         */
        static::updating(function($item) {

        });

        /**
         * Write code on Method
         *
         * @return response()
         */
        static::updated(function($item) {

        });

        /**
         * Write code on Method
         *
         * @return response()
         */
        static::deleted(function($item) {

        });
    }
}
