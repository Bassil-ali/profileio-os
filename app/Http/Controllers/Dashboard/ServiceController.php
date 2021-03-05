<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

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

        $request->validate($rules);

        $request_data = $request->all();

       
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
