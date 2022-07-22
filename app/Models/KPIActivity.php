<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class KPIActivity extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    public $table = "kpi_activities";

    protected $fillable = [
        'id',
        'name',
        'score',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class, "kpi_activity_id");
    }
}
