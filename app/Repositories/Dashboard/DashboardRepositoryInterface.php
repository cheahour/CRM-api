<?php

namespace App\Repositories\Dashboard;

use Illuminate\Http\Request;

interface DashboardRepositoryInterface {
    public function get_customers_total(Request $request);
    public function get_sales_pipeline_total(Request $request);
    public function get_sale_payment_terms(Request $request);
    public function get_sale_packages(Request $request);
    public function get_sale_territories(Request $request);
    public function get_customers_pipeline_by_user(Request $request);
    public function export_excel_report(Request $request);
}
