<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::all();
        return view('courses.index',["data"=>$courses]);
    }

   
    public function create()
    {
       
            return view('courses.create');
      
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | min : 4 | max:15',
            'description'=>'required',
            'duration'=>'required'         
        ]);
        $input =$request->all();
        //$input['user_id'] = auth()->user()->id;
        Course::create($input);
        return redirect('/courses');
    }

   
    public function show(Course $course)
    {
        return view('courses.show',["data"=>$course]);
    }

   
    public function edit(Course $course)
    {
        return view('courses.edit',["data"=>$course]);
    }

   
    public function update(Request $request, Course $course)
    {
  
            $course ->update($request->all());
            return redirect('/courses');
        
    
    }

  
    public function destroy(Course $course)
    {

            $course->delete();
            return redirect('/courses');
       
    }
    public function available(Course $course)
    {
        $courses=Course::all();
        return view('available',["data"=>$courses]);
       
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->course_id=$req->course_id;
           $cart->save();
           return redirect('enrollment');

        }
        else
        {
            return redirect('/login');
        }
    }
    function enrollment()
            {
                $userId=Session::get('user')['id'];
                $courses= DB::table('cart')
                ->join('courses','cart.course_id','=','courses.id')
                ->where('cart.user_id',$userId)
                ->select('courses.*','cart.id as cart_id')
                ->get();
        
                return view('enrollment',['courses'=>$courses]);
            }
            function removeCart($id)
            {
                Cart::destroy($id);
                return redirect('enrollment');
            }   
}
