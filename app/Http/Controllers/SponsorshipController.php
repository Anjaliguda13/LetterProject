<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\sponsorship;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spons = sponsorship::all();
        return view('sponsorship_display',compact('spons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empdata = Employee::all();
        return view('sponsorship_form', compact('empdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function sponsorship()
    {
        $empdata = Employee::all();
        return view('sponsorship_form', compact('empdata'));
    }

    public function store(Request $request)
    {

        $user=new sponsorship([
            'clg_name'=>$request->get('clg_name'),
            'Dept'=>$request->get('Dept'),
            'project_name'=>$request->get('project_name'),
            'guide_name'=>$request->get('guide_name'),
            'guide_design'=>$request->get('guide_design'),
            'stud_name'=>$request->get('stud_name'),
            'roll_no'=>$request->get('roll_no'),   

        ]);
        $user->save();
        echo"inserted";
        // return redirect('/internships');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsc = sponsorship::find($id)->count();
        if ($sponsc!=0)
        {
            $spons = sponsorship::find($id)->first();
            $pdf=PDF::loadview('sponsored_letter',['spons'=>$spons]);
            return $pdf->stream('sponsored_letter.pdf');
            
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
        $user = sponsorship::find($id); 
        $empdata = Employee::all(); 
        return view('sponsorship_update', compact('user', 'empdata')); 
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
        $clg_name=$request->get('clg_name');
        $Dept=$request->get('Dept');
        $project_name=$request->get('project_name');
        $guide_name=$request->get('guide_name');
        $guide_design=$request->get('guide_design');
        $stud_name=$request->get('stud_name');
        $roll_no=$request->get('roll_no');

       
        $user=sponsorship::find($id);
        $user->clg_name=$clg_name;
        $user->Dept=$Dept;
        $user->project_name=$project_name;
        $user->guide_name=$guide_name;
        $user->guide_design=$guide_design;
        $user->stud_name=$stud_name;
        $user->roll_no=$roll_no;

      
        $user->update();
       
        return redirect('/sponsorships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=sponsorship::find($id);
        $user->delete();
        return redirect('/sponsorships');
    }
}
