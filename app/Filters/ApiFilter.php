<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    protected $safeParams = [  
        // Columns where comparison can be made
    ];

    protected $columnMap = []; // e.g. ['name' => 'name', 'postalCode' => 'postal_code']

    protected $opMap = [ 
        // e.g. ['eq' => '=', 'ne' => '<>']
    ];

    public function transform(Request $request)
    {
        $query = [];

        foreach($this->safeParams as $param => $operators)
        {
            $temp = $request->query($param);

            if(isset($temp))
            {
                $col = $this->columnMap[$param] ?? $param;

                foreach($operators as $operator)
                {
                    if(isset($temp[$operator]))
                    {
                        $query[] = [$col, $this->opMap[$operator], $temp[$operator]];
                    }
                }
            }
            else
            {
                continue;
            }
        }

        return $query;
    }
}