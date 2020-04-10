<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Intro;
use App\Service;
use App\Portfolio;
use App\Testimonial;
use App\Team;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro = Intro::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $services = Service::all();
        return view("layouts.backoffice",  compact("intro", "portfolios", "testimonials","teams", "services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      Intro::find($id) -> delete();
      return redirect() -> back();
    }


    public function create(){
      $intro = new Intro();
      $intro-> img_name = request('img_name');
      $intro-> img_path = request('img_path'); 
      $intro->save();
     
      return redirect()->route('Backoffice');
  }

}
