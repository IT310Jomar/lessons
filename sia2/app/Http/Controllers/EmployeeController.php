<?php

namespace App\Http\Controllers;

use App\Models\Employments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller

{

    /*
    |--------------------------------------------------------------------------
    | LEVEL 1 EASY
    |--------------------------------------------------------------------------
    |
    */
    public function getEmployments(){

        $easy = DB::select('SELECT emp.*,u.name AS u_name,u.email AS u_email,d.name AS d_name,l.name AS l_name FROM employments AS emp
                            INNER JOIN users AS u ON u.id = emp.user_id
                            INNER JOIN departments AS d ON d.id = emp.department_id
                            INNER JOIN locations AS l ON l.id = emp.location_id
                            INNER JOIN employment_statuses_create AS esc ON esc.id = emp.employment_status_id
                            INNER JOIN employment_types AS et ON et.id = emp.employment_types_id');


        // return view('dashboard.employee', compact('employees'));
        return response()->json(['success' => true, 'easy'=> $easy],200);
    }

    public function showEmployeePage()
{
    return view('dashboard.employee'); // Ensure you have a Blade file in resources/views/dashboard/employee.blade.php
}

     /*]
    |--------------------------------------------------------------------------
    | LEVEL 2 MODERATE
    |--------------------------------------------------------------------------
    |
    */

    public function getEmploymentsData(){

        $moderate= DB::table('employments as emp')
        ->select('emp.*','u.name AS u_name','u.email as u_email','d.name as d_name','l.name AS l_name')
        ->join('users as u','u.id','emp.user_id')
        ->join('departments as d','d.id','emp.department_id')
        ->join('locations as l','l.id','emp.location_id')
        ->get();

        return response()->json(['success' => true, 'moderate'=> $moderate],200);
    }

     /*
    |--------------------------------------------------------------------------
    | LEVEL 3 CHALLENGING(ELOQUENT)
    |--------------------------------------------------------------------------
    |
    */

    public function getEmploymentsChallenging(){

        $challenging = Employments::with('user','department','location','employee_status','location.test.empLocations')->get();

        return response()->json(['success' => true, 'challenging' => $challenging],200);


    }

     /*
    |--------------------------------------------------------------------------
    | LEVEL 4 DIFFICULT(ELOQUENT)
    |--------------------------------------------------------------------------
    |
    */

    public function getEmploymentsDifficult(){

        $difficult = Employments::with(['user' => function($q){
            $q->select('*');
        }])->with(['department' => function($q){
            $q->select('*');
        }])->with(['location' => function($q){
            $q->select('*');
        }])->with(['employee_status' => function($q){
            $q->select('*');
        }])->get();

        return response()->json(['success' => true,'difficult'=> $difficult],200);
    }

}
