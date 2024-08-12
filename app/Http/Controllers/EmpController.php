<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
    
        return view('Employee_display', compact('employees'));
        
    }
    public function search(Request $request)
    {
        $name = $request->input('name');
        $employees = [];
    if (!empty($name)) {
        $employees = Employee::where('name', 'like', "%$name%")->get();
        return view('empsearch', compact('employees'));
    }
    else{
    return view('empsearch', compact('employees'));
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emp_details');  
    }
    public function emp()
   {
    return view('emp_details');
   }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['status']="success";
        $data['msg']="data insert";
        print_r(json_encode($data));
        $img=$request->file('photo');
        $imgtmp=$img->getClientOriginalName();
        $img->move('photos',$imgtmp);

        $user=new employee([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'mobile'=>$request->get('mobile'),
             'dob' => $request->get('dob'),
             'gender' => $request->get('gender'),
             'documents' => json_encode($request->get('documents')),
             'status' => $request->get('status'),
             'previous_company' => $request->get('previous_company'),
             'photo'=>$imgtmp,
        
        ]);
        $user->save();
        return redirect('/emps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=employee::find($id);
        return view('employee_Update',compact('user'));
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
        $name=$request->get('name');
        $email=$request->get('email');
        $address=$request->get('address');
        $mobile=$request->get('mobile');
       
        $user=employee::find($id);
        $user->name=$name;
        $user->email=$email;
        $user->address=$address;
        $user->mobile=$mobile;
       
        $user->update();
        return redirect('emps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user=employee::find($id);
       $user->delete();
       return redirect('/emps');
    }
}
