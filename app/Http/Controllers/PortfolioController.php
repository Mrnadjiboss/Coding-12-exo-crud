<?php

namespace App\Http\Controllers;
use App\Portfolio;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function deletePortfolio($id)
    {
      Portfolio::find($id) -> delete();
      return redirect() -> back();
    }
    public function editPortfolio($id) {
      $portfolios = Portfolio::find($id);
      return view('backoffice.editportfolio', compact('portfolios'));
  
  }
      // envoi formulaire
  public function updatePortfolio($id){
          $portfolios = Portfolio::find($id);
          $portfolios -> img_path = request('img_path');
          $portfolios -> img_name = request('img_name');
          $portfolios -> img_desc = request('img_desc');
          $portfolios->save();
          return redirect()->route('Backoffice');
      }
}
