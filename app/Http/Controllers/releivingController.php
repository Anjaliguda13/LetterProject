<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\releiving;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
class releivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rele=Employee::join('releivings','Employees.id','=','releivings.empid')->get();
    return view('releiving_display', compact('rele'));
    }

    public function releiving()
    {
        $empdata = Employee::all();
        return view('releiving_form', compact('empdata'));
    }
    

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('releiving_form', compact('empdata'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new releiving([
            'empid'=>$request->get('empid'),
            'resign_date'=>$request->get('resign_date'),
            'relieve_date'=>$request->get('relieve_date'),
            'role'=>$request->get('role'),
        ]);
        $user->save();
        return redirect('/releivings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo $id;
        // $id=get('id');
        $relic = DB::table('releivings')
            ->join('employees', 'employees.id', '=', 'releivings.empid')
            ->select('releivings.*', 'employees.*')
            ->where('employees.id',$id) 
            ->where('releivings.empid', $id)
            ->count();
        
        if($relic!=0)
        {
            $reli = DB::table('releivings')
                ->join('employees', 'employees.id', '=', 'releivings.empid')
                ->select('releivings.*', 'employees.*')
                ->where('employees.id',$id) 
                ->where('releivings.empid', $id)
                ->first();
            
        // echo $reli;
        // if (empty($reli)) {
       
        // }
        
        $pdf=PDF::loadview('reliving_letter',['reli'=>$reli]);
        return $pdf->stream('reliving_letter.pdf');
        // return view('reliving_letter', compact('reli'));
        }
        else
        {
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
    $user = releiving::find($id); 
    $empdata = Employee::all(); 
    return view('releiving_update', compact('user', 'empdata')); 
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
        $resign_date=$request->get('resign_date');
        $relieve_date=$request->get('relieve_date');
        $role=$request->get('role');
       
        $user=releiving::find($id);
        $user->empid=$empid;
        $user->resign_date=$resign_date;
        $user->relieve_date=$relieve_date;
        $user->role=$role;
       
        $user->update();
        return redirect('/releivings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=releiving::find($id);
        $user->delete();
        return redirect('/releivings');
    }
}
