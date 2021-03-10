<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

use Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();

       
        return view('dashboard.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.address1' => 'required'];
            $rules += [$locale . '.address2' => 'required'];
            $rules += [$locale . '.address3' => 'required'];
            $rules += [$locale . '.address4' => 'required'];
            $rules += [$locale . '.address5' => 'required'];
            $rules += [$locale . '.address6' => 'required'];
            $rules += [$locale . '.text1' => 'required'];
            $rules += [$locale . '.text2' => 'required'];
            $rules += [$locale . '.text3' => 'required'];
            $rules += [$locale . '.text4' => 'required'];
            $rules += [$locale . '.text5' => 'required'];
            $rules += [$locale . '.text6' => 'required'];
           

        }//end of  for each
        $rules += [ 'image1' => 'required'];
        $rules += ['image2' => 'required'];
        $rules += ['image3' => 'required'];
        $rules += ['image4' => 'required'];
        $rules += ['image5' => 'required'];
        $rules += ['image5' => 'required'];
        $rules += ['image6' => 'required'];

        $request->validate($rules);


        $request_data = $request->all();

       

   
        Image::make($request->image1)->resize(700, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('uploads/product_images/' . $request->image1->hashName()));
    $request_data['image1'] = $request->image1->hashName();
    
    //dd($request->image1->hashName());
    
    Image::make($request->image2)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image2->hashName()));
    $request_data['image2'] = $request->image2->hashName();
    
    Image::make($request->image3)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image3->hashName()));
    $request_data['image3'] = $request->image3->hashName();
    
    Image::make($request->image4)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image4->hashName()));
    $request_data['image4'] = $request->image4->hashName();
    
    Image::make($request->image1)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image1->hashName()));
    $request_data['image1'] = $request->image1->hashName();
    
    Image::make($request->image5)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image5->hashName()));
    $request_data['image5'] = $request->image5->hashName();
    
    Image::make($request->image6)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image6->hashName()));
    $request_data['image6'] = $request->image6->hashName();

       

       
        //  dd($request_data);
       
        Service::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.address1' => 'required'];
            $rules += [$locale . '.address2' => 'required'];
            $rules += [$locale . '.address3' => 'required'];
            $rules += [$locale . '.address4' => 'required'];
            $rules += [$locale . '.address5' => 'required'];
            $rules += [$locale . '.address6' => 'required'];
            $rules += [$locale . '.text1' => 'required'];
            $rules += [$locale . '.text2' => 'required'];
            $rules += [$locale . '.text3' => 'required'];
            $rules += [$locale . '.text4' => 'required'];
            $rules += [$locale . '.text5' => 'required'];
            $rules += [$locale . '.text6' => 'required'];
            
           

        }//end of  for each

        $request->validate($rules);


        $request_data = $request->all();

      //  dd($request->all());
 Image::make($request->image1)->resize(700, null, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path('uploads/product_images/' . $request->image1->hashName()));
$request_data['image1'] = $request->image1->hashName();

//dd($request->image1->hashName());

Image::make($request->image2)->resize(700, null, function ($constraint) {
    $constraint->aspectRatio();
})->save(public_path('uploads/product_images/' . $request->image2->hashName()));
$request_data['image2'] = $request->image2->hashName();

Image::make($request->image3)->resize(700, null, function ($constraint) {
    $constraint->aspectRatio();
})->save(public_path('uploads/product_images/' . $request->image3->hashName()));
$request_data['image3'] = $request->image3->hashName();

Image::make($request->image4)->resize(700, null, function ($constraint) {
    $constraint->aspectRatio();
})->save(public_path('uploads/product_images/' . $request->image4->hashName()));
$request_data['image4'] = $request->image4->hashName();

Image::make($request->image1)->resize(700, null, function ($constraint) {
    $constraint->aspectRatio();
})->save(public_path('uploads/product_images/' . $request->image1->hashName()));
$request_data['image1'] = $request->image1->hashName();

Image::make($request->image5)->resize(700, null, function ($constraint) {
    $constraint->aspectRatio();
})->save(public_path('uploads/product_images/' . $request->image5->hashName()));
$request_data['image5'] = $request->image5->hashName();

Image::make($request->image6)->resize(700, null, function ($constraint) {
    $constraint->aspectRatio();
})->save(public_path('uploads/product_images/' . $request->image6->hashName()));
$request_data['image6'] = $request->image6->hashName();

      

       
       

     
        // dd($service);

        
        $service->update($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.service.index');
    }
}
