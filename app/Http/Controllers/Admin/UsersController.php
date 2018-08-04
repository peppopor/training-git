<?php

namespace App\Http\Controllers\Admin;


use App\User  as  UserMod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    public function index()
    {
        // $mods  = UserMod::where('active', 1)->first()
        //        ->where('city','bangkok')
        //        ->orderBy('name', 'desc')
        //        ->take(10)
        //        ->get();
        $mods = UserMod::find([1, 2, 3]);
           foreach ($mods as $item) {
            echo $item->name . "<br>";
        }

        

        
        // // Using alias name
        // //$mods = UserMod::all();

        // foreach ($mods as $item) {
        //     echo $item->name . "  " . $item->surname . "  " . $item->age ;
        //     echo "<br>";
        
    }

    public function show($id)
    {
        $mod = UserMod::find(1);
         echo $mods->name . "  " . $mods->surname . "  " . $mods->age ;
    }

    //  public function store(Request $request)
    // {
    //     // Validate the request...
 
    //     $mod = new User;
    //     $mod->name = $request->name;
    //     $mod->save();
    // }

}
