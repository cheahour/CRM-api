<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class Pipeline extends Model
{
  use HasFactory, Uuids, SoftDeletes;

  protected $fillable = [
      'id',
      'name',
  ];

  public function kpiActivities()
  {
      return $this->hasMany(KpiActivity::class);
  }
}
