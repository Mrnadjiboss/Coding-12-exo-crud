<?php

namespace App\Http\Controllers;
use App\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function deleteService($id)
    {
      Service::find($id) -> delete();
      return redirect() -> back();
    }
  //   public function createService(){
  //     $intro = new Service();
      
  //     $intro->save();
     
  //     return redirect()->route('Backoffice');
  // }

  public function editService($id) {
    $services = Service::find($id);
    return view('backoffice.editservice', compact('services'));

}
    // envoi formulaire
public function updateService($id){
        $intro = Service::find($id);
        $intro-> name = request('name');
        $intro-> desc = request('desc'); 
        
        $intro->save();
        return redirect()->route('Backoffice');
    }


}

