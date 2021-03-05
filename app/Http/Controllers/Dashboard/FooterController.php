<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::get();
   
         //dd($footers);
       
        return view('dashboard.footer.index',compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.footer.create');
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

            $rules += [$locale . '.company_name' => 'required'];
            $rules += [$locale . '.address' => 'required'];
            $rules += [$locale . '.text' => 'required'];
    
        }//end of  for each

        $rules += ['phone' => 'required'];
        $rules += ['email' => 'required'];
       

        $request->validate($rules);

        $request_data = $request->all();

       
        // dd($request_data);
       
        Footer::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.footer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('dashboard.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.company_name' => 'required'];
            $rules += [$locale . '.address' => 'required'];
            $rules += [$locale . '.text' => 'required'];
    
        }//end of  for each

        $rules += ['phone' => 'required'];
        $rules += ['email' => 'required'];
       

        $request->validate($rules);

        $request_data = $request->all();

       
        // dd($request_data);
       
        $footer->update($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.footer.index');
    }
}
