<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\internship;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $intern=Employee::join('internships','Employees.id','=','internships.empid')->get();
    return view('internship_display', compact('intern'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('internship_form', compact('empdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function internship()
    {
        $empdata = Employee::all();
        return view('internship_form', compact('empdata'));
    }

    public function store(Request $request)
    {
        $user=new internship([
            'empid'=>$request->get('empid'),
            'position'=>$request->get('position'),
            'st_date'=>$request->get('st_date'),
            'end_date'=>$request->get('end_date'),
           

        ]);
        $user->save();
    
        return redirect('/internships');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $internc= DB::table('internships')
        ->join('employees', 'employees.id', '=', 'internships.empid')
        ->select('internships.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('internships.empid', $id)
        ->get()->count();
        if($internc!=0)
    {
        $intern = DB::table('internships')
        ->join('employees', 'employees.id', '=', 'internships.empid')
        ->select('internships.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('internships.empid', $id)
        ->get()->first();
        $pdf=PDF::loadview('internship_letter',['intern'=>$intern]);
        return $pdf->stream('internship_letter.pdf');
// return view('internship_letter', compact('intern'));
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
        $user = internship::find($id); 
        $empdata = Employee::all(); 
        return view('internship_update', compact('user', 'empdata')); 
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
        $position=$request->get('position');
        $st_date=$request->get('st_date');
        $end_date=$request->get('end_date');

       
        $user=internship::find($id);
        $user->empid=$empid;
        $user->position=$position;
        $user->st_date=$st_date;
        $user->end_date=$end_date;
      
        $user->update();
       
        return redirect('/internships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=internship::find($id);
        $user->delete();
        return redirect('/internships');
    }
}
