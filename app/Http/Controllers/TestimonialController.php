<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function deleteTestimonial($id)
    {
      Testimonial::find($id) -> delete();
      return redirect() -> back();
    }
    public function editTestimonial($id) {
      $testimonials = Testimonial::find($id);
      return view('backoffice.edittestimonial', compact('testimonials'));
  
  }
      // envoi formulaire
  public function updateTestimonial($id){
          $testimonials = Testimonial::find($id);
          $testimonials-> name = request('name');
          $testimonials-> job = request('job'); 
          $testimonials-> text = request('text'); 
          $testimonials-> img_path = request('img_path'); 
          
          $testimonials->save();
          return redirect()->route('Backoffice');
      }
}
