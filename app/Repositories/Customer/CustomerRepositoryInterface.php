<?php

namespace App\Repositories\Customer;

use Illuminate\Http\Request;

/**
 *  Features:
 * - Get all customers:
 *  - filter based on sale
 * - Create customer
 * - Update customer
 * - Get customer detail
 */

interface CustomerRepositoryInterface {
    public function get_customers();
    public function update_customer($id, Request $request);
    public function get_customer($id);
    public function create_customer(Request $request);
}
