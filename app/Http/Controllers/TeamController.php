<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function deleteTeam($id)
    {
      Team::find($id) -> delete();
      return redirect() -> back();
    }
    public function editTeam($id) {
      $teams = Team::find($id);
      return view('backoffice.editteam', compact('teams'));
  
  }
      // envoi formulaire
  public function updateTeam($id){
          $teams = Team::find($id);
          $teams -> job = request('job');
          $teams -> name = request('name');
          $teams -> img_path = request('img_path');
          $teams->save();
          return redirect()->route('Backoffice');
      }
    
  
}
