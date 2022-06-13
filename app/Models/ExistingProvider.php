<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class ExistingProvider extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $fillable = [
        "id",
        "name",
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
