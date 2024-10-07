<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contactu;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Qualification;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $setting = Setting::first();
        $blogs = Blog::orderBy('created_at','desc')->paginate(9);
        $slider = Slider::where('status',1)->first();
        $qualifications = Qualification::get();
        $services = Service::get();
        $galleryCategories = GalleryCategory::get();
        $galleries = Gallery::with('category')->get();
        return view('frontend.home',compact('setting','blogs','slider','qualifications','services','galleryCategories','galleries')); 
    }

    public function single_blog($id){
        $blog = Blog::findOrfail($id);
        return view('frontend.single-blog',compact('blog'));
    }

    public function contact_us(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'message' => 'required',
            'g-recaptcha-response' => 'required',
        ]);
        Contactu::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]); 
        return response()->json([
            'status' => 200,
            'responseText' => 'Your message has been sent successfully',
        ]);
    }
}
