<?php

namespace App\Http\Controllers\Api;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Util\Xml;

class WebServiceController extends Controller
{
    public function getEmployeesBySalary(Request $request)
    {
        $employees = Employee::where('salary', '>=', $request->salaryMin)
            ->where('salary', '<=', $request->salaryMax)
            ->get();

        $config = [
            'template' => '<test></test>',
            'rowName' => 'employee'
        ];
        return response()->xml($employees, 200, $config);
    }
}
