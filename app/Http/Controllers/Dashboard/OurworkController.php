<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Ourwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class OurworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourworks = Ourwork::get();

       
        return view('dashboard.ourwork.index',compact('ourworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ourwork.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['image' => 'required'];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.address' => 'required'];
            $rules += [$locale . '.text' => 'required'];
           

        }//end of  for each

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            Image::make($request->image)
            ->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path('uploads/product_images/' . $request->image->hashName()));

        $request_data['image'] = $request->image->hashName();

        }//end of if
        //  dd($request_data);
       
        Ourwork::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.ourwork.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ourwork  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function show(Ourwork $ourwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ourwork  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Ourwork $ourwork)
    {
        return view('dashboard.ourwork.edit', compact('ourwork'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ourwork  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ourwork $ourwork)
    {
        $rules = ['image' => 'required'];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.address' => 'required'];
            $rules += [$locale . '.text' => 'required'];
           

        }//end of  for each

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            Image::make($request->image)
            ->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path('uploads/product_images/' . $request->image->hashName()));

        $request_data['image'] = $request->image->hashName();

        }//end of if
        // dd($request_data);
       
        $ourwork->update($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.ourwork.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ourwork  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ourwork $ourwork)
    {
        $ourwork->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.ourwork.index');
    }
}
