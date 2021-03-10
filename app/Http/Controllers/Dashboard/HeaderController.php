<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $headers = Header::get();

       
        return view('dashboard.header.index',compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.header.create');
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

            Image::make($request->image)->save(public_path('uploads/product_images/' . $request->image->hashName()));

        $request_data['image'] = $request->image->hashName();

        }//end of if
        //  dd($request_data);
       
        Header::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.header.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('dashboard.header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        
        $rules = ['image' => 'required'];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.address' => 'required'];
            $rules += [$locale . '.text' => 'required'];
           

        }//end of  for each

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            Image::make($request->image)->save(public_path('uploads/product_images/' . $request->image->hashName()));

        $request_data['image'] = $request->image->hashName();

        }//end of if
        // dd($request_data);
       
        $header->update($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        $header->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.header.index');
    }
}
