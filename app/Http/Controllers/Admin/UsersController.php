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
        $mods = UserMod::orderBy('id','desc')->paginate(5);
        return view('admin.user.lists', compact('mods') );
      }



     public function update(Request $request, $id)
    {       

            //dd($request);
            $mod = UserMod::find($id);
            $mod->name = $request->name;
            $mod->surname = $request->surname;
            $mod->password = bcrypt($request->password);
            $mod->email = $request->email;
            $mod->mobile = $request->mobile;
            $mod->age = $request->age;
            $mod->address = $request->address;
            $mod->city = $request->city;

            $mod->save();
            return view('admin.user.edit', compact('mod'))->with('success', 'User ['.$request->name.'] UPDATE successfully.');

             //return redirect('admin.user',compact('mod'))
            

       
    }


     public function create()
    {
        
            $mod = UserMod::all();

            return view('admin.user.create',compact('mod'));
       
    }

    public function show($id)
    {
         $mod = UserMod::find($id);
        
         return view('admin.user.info', compact('mod') );
    }

    public function edit($id)
    {
         $mod = UserMod::find($id);
        
         return view('admin.user.edit', compact('mod') );
    }




     public function store(Request $request)
    {
         request()->validate([
            'name' => 'required|min:2|max:50',
            'surname' => 'required|min:2|max:50',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'age' => 'required|numeric',
            'confirm_password' => 'required|min:6|max:20|same:password',
        ], [
            'name.required' => 'กรุณากรอกชื่อด้วยครับ',
            'surname.required' => 'กรุณากรอกนามสกุลด้วยครับ',
            'mobile.required' => 'กรุณากรอกเบอร์โทรศํพท์ด้วยครับ',
            'email.required' => 'กรุณากรอก Email ดว้ยครับ',
            'password.required' => 'กรุณากรอก passwaord ดว้ยครับ',
            'age.required' => 'กรุณากรอกอายุดว้ยครับ',
            'confirm_password.required' => 'กรุณากรอก password อีกครั้ง',
            'name.min' => 'กรอกชื่อมากกว่า 2 ตัว.',
            'name.max' => 'กรอกชื่อห้ามเกิน 50 ตัว.',
            'email.unique' => 'Email ซ้ำ',
            'confirm_password.same:password' => 'รหัสผ่านของท่านไม่เหมือนกัน',
        ]); 


        $mod = new UserMod;
        $mod->email    = $request->email;
        $mod->password = bcrypt($request->password);
        $mod->name     = $request->name;
        $mod->surname  = $request->surname;
        $mod->mobile   = $request->mobile;
        $mod->age      = $request->age;
        $mod->address  = $request->address;
        $mod->city     = $request->city;
        $mod->save();

        $mods = UserMod::orderBy('id','desc')->paginate(5);
        //return view('admin.user.lists', compact('mods') );

        return redirect('admin/users')
                    ->with('success', 'User ['.$request->name.'] created successfully.');
    }

    

    public function destroy($id)
    {
       
        $mod = UserMod::find($id);
        $mod->delete();

        $mods = UserMod::orderBy('id','desc')->paginate(5);
        return redirect('admin/users')
                ->with('success', 'User deleted successfully.');
    }


    


}
