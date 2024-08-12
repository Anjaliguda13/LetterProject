<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;   
use App\Models\experience;
use App\Models\industrial;
use App\Models\internship;
use App\Models\offer;
use App\Models\promotion;
use App\Models\releiving;
use App\Models\sponsorship;
use App\Models\salary;



class indexController extends Controller
{
   public function index()
   {
      $emp = Employee::count();
      $rele= releiving::count();
      $promo= promotion::count();
      $offer= offer::count();
      $exper = experience::count();
      $indus= industrial::count();
      $spons= sponsorship::count();
      $intern= internship::count();
      $sal= salary::count();
      return view('index' ,compact('emp','rele','promo','offer','exper','indus','spons','intern','sal'));
   //  return view('index');
   }
   public function header()
   {
    return view('header');
   }
   public function login()
   {
    return view('login');
   }
   public function emp()
   {
    return view('emp_details');
   }
   public function internship()
   {
    return view('internship_form');
   }
   public function industrial_intern()
   {
    return view('industrial_internship_form');
   }
   public function sponsorhsip()
   {
    return view('sponsorship_form');
   }
   public function experience()
   {
    return view('experience');
   }
   public function releiving()
   {
    return view('releiving_form');
   }
   public function promotion()
   {
    return view('promotion_form');
   }
   public function offer()
   {
    return view('offer_form');
   }
   public function Emp_Dis()
   {
    return view('Employee_display');
   }

   public function salary()
{
   return view('salary');
}
public function salaries()
{
   return view('salary_form');
}
}




