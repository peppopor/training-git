<?php

namespace App\Http\Controllers\Admin;


use App\User  as  UserMod;
use App\Model\Shop  as  ShopMod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    public function index()
  {
    $mods = UserMod::paginate(5);
    return view('admin.user.lists', compact('mods') );
  }



    public function store(Request $request)
    {
        
            $mods = UserMod::all();

            return view('admin.user.create', compact('mods'));
       
    }


     public function create()
    {
        
            $roles = UserMod::all();

            return view('admin.user.create',compact('roles'));
       
    }




    //  public function store(Request $request)
    // {
    //     // Validate the request...
 
    //     $mod = new UserMod;
    //     $mod->name = $request->name;
    //     $mod->password = bcrypt($request->password);
    //     $mod->email = $request->email;
    //     $mod->save();
    // }

    public function update(Request $request, $id)
    {
        $mod = UserMod::find($id);
        $mod->name = $request->name;
        $mod->password = bcrypt($request->password);
        $mod->email = $request->email;
        $mod->save();
        echo "Update DONE";
    }

     public function destroy($id)
    {
         $mod = UserMod::find($id);
         $mod->delete();
         echo "Delete DONE";
    }


    


}
