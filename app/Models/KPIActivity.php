<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class KpiActivity extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'score',
    ];

    public function customer() {
        return $this->hasMany(Customer::class);
    }
}
