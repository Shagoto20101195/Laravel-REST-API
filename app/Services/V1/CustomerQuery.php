<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class CustomerQuery
{
    protected $safeParams = [  // Columns where comparison can be made
        'name' => ['eq'],
        'type' => ['eq'],
        'address' => ['eq'],
        'email' => ['eq'],
        'phone' => ['eq']
    ];

    protected $columnMap = []; // e.g. ['name' => 'name', 'postalCode' => 'postal_code']

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

    public function transform(Request $request)
    {
        $query = [];
        return $query;
    }
}