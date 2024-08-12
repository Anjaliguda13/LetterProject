<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\salary;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sal=Employee::join('salaries','Employees.id','=','salaries.empid')->get();
        return view('salary_display', compact('sal'));
    }

    public function salary()
    {
        $empdata = Employee::all();
        return view('salary_form', compact('empdata'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('salary_form', compact('empdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new salary([
            'empid'=>$request->get('empid'),
            'design'=>$request->get('design'),
            'basic_sal'=>$request->get('basic_sal'),
            'tax'=>$request->get('tax'),
            'salmode'=>$request->get('salmode'),
        ]);
        $user->save();
        return redirect ('/salaries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salc = DB::table('salaries')
        ->join('employees', 'employees.id', '=', 'salaries.empid')
        ->select('salaries.*', 'employees.*')
        ->where('employees.id','=',$id) 
        ->where('salaries.empid','=',$id)
        ->count();
        if($salc!=0)
         {
        $sal = DB::table('salaries')
        ->join('employees', 'employees.id', '=', 'salaries.empid')
        ->select('salaries.*', 'employees.*')
        ->where('employees.id','=',$id) 
        ->where('salaries.empid','=',$id)
        ->count();
        //  return $sal;        
        $pdf=PDF::loadview('salary',['sal'=>$sal]);
        return $pdf->stream('salary_receipt.pdf');
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
        $user = salary::find($id); 
    $empdata = Employee::all(); 
    return view('salary_update', compact('user', 'empdata')); 
    
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
        $design=$request->get('design');
        $basic_sal=$request->get('basic_sal');
        $tax=$request->get('tax');
        $salmode=$request->get('salmode');
       
       
        $user=salary::find($id);
        $user->empid=$empid;
        $user->design=$design;
        $user->basic_sal=$basic_sal;
        $user->tax=$tax;
        $user->salmode=$salmode;   

        $user->update();
        return redirect('/salaries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=salry::find($id);
        $user->delete();
        return redirect('/salaries');
    }
}
