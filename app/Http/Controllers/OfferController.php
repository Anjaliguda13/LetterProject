<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\offer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


use DB;
class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer=Employee::join('offers','Employees.id','=','offers.empid')->get();
    return view('offer_display', compact('offer'));
       
    }
    public function offer()
    {
        $empdata = Employee::all();
        return view('offer_form', compact('empdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('offer_form', compact('empdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new offer([
            'empid'=>$request->get('empid'),
            'offer_role'=>$request->get('offer_role'),
            'start_date'=>$request->get('start_date'),
            'start_salary'=>$request->get('start_salary'),
            'gross_salary'=>$request->get('gross_salary'),
            'last_date'=>$request->get('last_date'),

        ]);
        $user->save();
    
        return redirect('/offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $offerc = DB::table('offers')
        ->join('employees', 'employees.id', '=', 'offers.empid')
        ->select('offers.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('offers.empid', $id)
        ->count();

       if($offerc!=0)
       {

        $offer = DB::table('offers')
        ->join('employees', 'employees.id', '=', 'offers.empid')
        ->select('offers.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('offers.empid', $id)
        ->first();
        $pdf=PDF::loadview('offer_letter',['offer'=>$offer]);
        return $pdf->stream('offer_letter.pdf');
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
        $user = offer::find($id); 
    $empdata = Employee::all(); 
    return view('offer_update', compact('user', 'empdata')); 
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
        $offer_role=$request->get('offer_role');
        $start_date=$request->get('start_date');
        $start_salary=$request->get('start_salary');
        $gross_salary=$request->get('gross_salary');
        $last_date=$request->get('last_date');

       
        $user=offer::find($id);
        $user->empid=$empid;
        $user->offer_role=$offer_role;
        $user->start_date=$start_date;
        $user->start_salary=$start_salary;
        $user->gross_salary=$gross_salary;
        $user->last_date=$last_date;

        $user->update();
        return redirect('/offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=offer::find($id);
        $user->delete();
        return redirect('/offers');
    }
}
