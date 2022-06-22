<?php

namespace App\Http\Controllers\Api;

use App\Branch;
use App\Employee;
use App\Attendmethods;
use App\Http\Controllers\Controller;
use App\Imports\EmployeeImport;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class AttendMethodController extends Controller
{
    public function getData(Request $request){
        $data =  Attendmethods::where('active', 1)->get();

        return Response()->json(['status' => 1, 'message' => 'success', 'data' => $data]);

    }

}
