<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class MyController extends Controller
{
     public function edit($id)
     {
         $employee=Employee::find($id);
      return view('update',['data'=>$employee]);
     }
    public function update(Request $request,$id)
    {
       $obj=Employee::find($id);
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->password=md5($request->password);
           $obj->date_of_birth=$request->birthday;
          $obj->role=$request->role;
        
        if($obj->save())
        {
          
            return redirect()->to('/');
       
        }
    }
     public function home()
     {
        
         $data=Employee::all();
         return view('index',['data'=>$data]);
       
     }
     public function delete($id)
     {
        
         $obj=Employee::find($id);
      if($obj->delete()){
        return redirect()->to('/');
       
     }
 }
    public function store(Request $request)
    {
    	//dd($request);
       
       
        $obj=new Employee();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->password=md5($request->password);
        $obj->gender=$request->gender;
        $obj->is_active=$request->active;
           $obj->date_of_birth=$request->birthday;
          $obj->role=$request->role;
        
        if($obj->save())
        {
          
            return redirect('/');
        }
    }

     public function show()
    {  
       $data=Employee::all();

       dd($data);
       // @foreach($data as $r)
      // return view('/',['data'=>$data]);
    }

}
