<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ReceiptFilter extends ApiFilter
{
    protected $safeParams = [  // Columns where comparison can be made
        'customerId' => ['eq'],
        'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['eq', 'ne'],
        'paidAt' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'dueAt' => ['eq', 'gt', 'lt', 'gte', 'lte']
    ];

    protected $columnMap = [ // e.g. ['name' => 'name', 'postalCode' => 'postal_code']
        "customerId" => "customer_id",
        "amount" => "amount",
        "status" => "status",
        "paidAt" => "paid_at",
        "dueAt" => "due_at"
    ]; 

    protected $opMap = [
        'eq' => '=',
        'ne' => '<>',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'like' => 'like',
        'in' => 'in',
        'nin' => 'not in'
    ];
}