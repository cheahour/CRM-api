<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "phone_number",
        "contact_name",
        "telegram",
        "bandwidth",
        "deposit",
        "installation",
        "payment_term",
        "estimated_cash_collect",
        "monthly_fee",
        "expected_closed_date",
        "billing_date",
        "next_follow_up_date",
        "remark"
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function territory()
    {
        return $this->belongsTo(Territory::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function kpi_activity()
    {
        return $this->belongsTo(KpiActivity::class);
    }

    public function sale()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
