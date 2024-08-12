<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Promotion;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use DB;

class PromotionContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo=Employee::join('promotions','Employees.id','=','promotions.empid')->get();
         return view('promotion_display', compact('promo'));
    }
    public function Promotion()
    {
        $empdata = Employee::all();
        return view('promotion_form', compact('empdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('promotion_form', compact('empdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new Promotion([
            'empid'=>$request->get('empid'),
            'promotion_date'=>$request->get('promotion_date'),
            'prole'=>$request->get('prole'),
            'salary'=>$request->get('salary'),
        ]);
        $user->save();
         return redirect('/promotions');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promoc = DB::table('promotions')
        ->join('employees', 'employees.id', '=', 'promotions.empid')
        ->select('promotions.*', 'employees.*')
        ->where('employees.id', $id) 
        ->where('promotions.empid', $id)
        ->count();

        if($promoc!=0)
        {
        $promo = DB::table('promotions')
            ->join('employees', 'employees.id', '=', 'promotions.empid')
            ->select('promotions.*', 'employees.*')
            ->where('employees.id', $id) 
            ->where('promotions.empid', $id)
            ->first();
            $pdf=PDF::loadview('Promotion_letter',['promo'=>$promo]);
            return $pdf->stream('Promotion_letter.pdf');

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
        $user = Promotion::find($id); 
    $empdata = Employee::all(); 
    return view('promotion_update', compact('user', 'empdata')); 
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
        $promotion_date=$request->get('promotion_date');
        $prole=$request->get('prole');
        $salary=$request->get('salary');
       
        $user=Promotion::find($id);
        $user->empid=$empid;
        $user->promotion_date=$promotion_date;
        $user->prole=$prole;
        $user->salary=$salary;
       
        $user->update();
        return redirect('/promotions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=Promotion::find($id);
        $user->delete();
        return redirect('/promotions');
    }
}
