<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentreg;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class StudentregController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|max:255',
            'std_id'=> 'required|string|max:300',
            'class' => 'required|string|max:20',
            'school_name' => 'required|string|max:500',
            'photo_url' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        try {

            $imagepath = null;
            if($request->hasFile('photo_url'))
                {
                    $uploadedimage = Cloudinary::uploadApi()->upload($request->file('photo_url')->getRealPath(),[
                        'folder' => 'student_photo'
                    ]);

                    $imagepath = $uploadedimage['secure_url'] ?? null;
                 }


              studentreg::create([
                'name'=>$validated['name'],
                'std_id'=>$validated['std_id'],
                'class'=>$validated['class'],
                'school_name'=>$validated['school_name'],
                'photo_url'=>$imagepath,
              ]);   

              return back()->with('success','আপনার আবেদনটি সফলভাবে গৃহীত হয়েছে! Scrap Venture-এর সাথে থাকার জন্য ধন্যবাদ।');
        }

        catch(\Exception $e)
        {
            return back()->withInput()->with('error', 'একটি ত্রুটি ঘটেছে: ' . $e->getMessage());
        }
    }
}
