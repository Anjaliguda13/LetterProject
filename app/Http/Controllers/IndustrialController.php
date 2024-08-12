<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\industrial;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

class IndustrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indust=Employee::join('industrials','Employees.id','=','industrials.empid')->get();
    return view('industrial_display', compact('indust'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('industrial_internship_form', compact('empdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new industrial([
            'empid'=>$request->get('empid'),
            'course_name'=>$request->get('course_name'),
            'duration'=>$request->get('duration'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date'),
           

        ]);
        $user->save();
        return redirect('/industrials');
    }

    public function industrial()
    {
        $empdata = Employee::all();
        return view('industrial_internship_form', compact('empdata'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indusc = DB::table('industrials')
        ->join('employees', 'employees.id', '=', 'industrials.empid')
        ->select('industrials.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('industrials.empid', $id)
        ->count();

        if($indusc!=0)
        {
        $indus = DB::table('industrials')
        ->join('employees', 'employees.id', '=', 'industrials.empid')
        ->select('industrials.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('industrials.empid', $id)
        ->first();
        $pdf=PDF::loadview('industrial_internship_letter',['indus'=>$indus]);
        return $pdf->stream('industrial_internship_letter.pdf');
    // return view('industrial_internship_letter', compact('indus'));
        }

        else{
            echo "<script>alert('Your are not applied for this certificate')
            history.go(-1);
            </script>";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = industrial::find($id); 
        $empdata = Employee::all(); 
        return view('industrial_update', compact('user', 'empdata')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empid=$request->get('empid');
        $course_name=$request->get('course_name');
        $duration=$request->get('duration');
        $start_date=$request->get('start_date');
        $end_date=$request->get('end_date');
        

       
        $user=industrial::find($id);
        $user->empid=$empid;
        $user->course_name=$course_name;
        $user->duration=$duration;
        $user->start_date=$start_date;
        $user->end_date=$end_date;
      
        $user->update();
        return redirect('/industrials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=industrial::find($id);
        $user->delete();
        return redirect('/industrials');
    }
}
