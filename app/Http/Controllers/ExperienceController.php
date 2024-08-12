<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Experience;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exper=Employee::join('experiences','Employees.id','=','experiences.empid')->get();
    return view('experience_display', compact('exper'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('experience', compact('empdata'));
    }
    public function experience()
    {
        $empdata = Employee::all();
        return view('experience', compact('empdata'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new experience([
            'empid'=>$request->get('empid'),
            'Job_role'=>$request->get('Job_role'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date'),
           

        ]);
        $user->save();
    
        return redirect('/experiences');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experc = DB::table('experiences')
        ->join('employees', 'employees.id', '=', 'experiences.empid')
        ->select('experiences.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('experiences.empid', $id)
        ->count();
        if($experc!=0)
        {
        $exper = DB::table('experiences')
        ->join('employees', 'employees.id', '=', 'experiences.empid')
        ->select('experiences.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('experiences.empid', $id)
        ->first();
        // print_r($exper);
        $pdf=PDF::loadview('experience_letter',['exper'=>$exper]);
        return $pdf->stream('experience-letter.pdf');
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
        $user = experience::find($id); 
        $empdata = Employee::all(); 
        return view('experience_update', compact('user', 'empdata')); 
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
        $Job_role=$request->get('Job_role');
        $start_date=$request->get('start_date');
        $end_date=$request->get('end_date');
        

       
        $user=experience::find($id);
        $user->empid=$empid;
        $user->Job_role=$Job_role;
        $user->start_date=$start_date;
        $user->end_date=$end_date;
      
        $user->update();
        return redirect('/experiences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=experience::find($id);
        $user->delete();
        return redirect('/experiences');
    }
}
