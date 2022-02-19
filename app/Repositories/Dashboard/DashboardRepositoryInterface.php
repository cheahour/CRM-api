<?php

namespace App\Repositories\Dashboard;

use Illuminate\Http\Request;

interface DashboardRepositoryInterface {
    public function get_customers_count_every_dsms(Request $request);
    public function get_customers_count_every_sales(Request $request);
    public function get_customers_payment_term(Request $request);
    public function get_customers_total(Request $request);
    public function get_sales_pipeline_total(Request $request);
    public function get_most_sale_package(Request $request);
    public function get_sale_packages(Request $request);
    public function get_most_sale_territory(Request $request);
    public function get_sale_territories(Request $request);
}
