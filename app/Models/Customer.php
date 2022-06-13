<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "id",
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
        "remark",
        "user_id",
        "existing_bandwidth",
        "existing_price"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function pipeline()
    {
        return $this->belongsTo(Pipeline::class);
    }

    public function sale()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function existing_provider()
    {
        return $this->belongsTo(ExistingProvider::class);
    }

    public static function get_customers_count_every_dsms()
    {
        $dsms = User::dsms();
        $sales = User::sales();
        $customers_count = static::all()
            ->groupBy("user_id");
        return $customers_count;
    }

    public static function get_customers_count_every_sales()
    {
        return static::all()
            ->groupBy("user_id");
    }

    public static function filterPipeline(String $name)
    {
        $pipeline = Pipeline::whereName($name)->first();
        return static::all()
            ->where("pipeline_id", $pipeline->id);
    }
}
