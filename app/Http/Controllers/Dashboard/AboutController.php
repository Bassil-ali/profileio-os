<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::get();

       
        return view('dashboard.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.create');
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

            $rules += [$locale . '.text' => 'required'];
            $rules += [$locale . '.section_1' => 'required'];
            $rules += [$locale . '.section_2' => 'required'];
            $rules += [$locale . '.section_3' => 'required'];
            $rules += [$locale . '.section_4' => 'required'];
            $rules += [$locale . '.section_5' => 'required'];
            $rules += [$locale . '.section_6' => 'required'];
            $rules += [$locale . '.address_1' => 'required'];
            $rules += [$locale . '.address_2' => 'required'];
            $rules += [$locale . '.address_3' => 'required'];
            $rules += [$locale . '.address_4' => 'required'];
            $rules += [$locale . '.address_5' => 'required'];
            $rules += [$locale . '.address_6' => 'required'];

           

        }//end of  for each

        $request->validate($rules);

        $request_data = $request->all();

       
        //  dd($request_data);
       
        About::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('dashboard.about.edit', compact('about'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.text' => 'required'];
            $rules += [$locale . '.section_1' => 'required'];
            $rules += [$locale . '.section_2' => 'required'];
            $rules += [$locale . '.section_3' => 'required'];
            $rules += [$locale . '.section_4' => 'required'];
            $rules += [$locale . '.section_5' => 'required'];
            $rules += [$locale . '.section_6' => 'required'];
            $rules += [$locale . '.address_1' => 'required'];
            $rules += [$locale . '.address_2' => 'required'];
            $rules += [$locale . '.address_3' => 'required'];
            $rules += [$locale . '.address_4' => 'required'];
            $rules += [$locale . '.address_5' => 'required'];
            $rules += [$locale . '.address_6' => 'required'];

           

        }//end of  for each

        $request->validate($rules);

        $request_data = $request->all();

       
        //  dd($request_data);
       
        $about->update($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.about.index');
    }
}
