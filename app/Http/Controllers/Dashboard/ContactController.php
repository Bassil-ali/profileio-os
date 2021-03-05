<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get();

       
        return view('dashboard.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contact.create');
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

            $rules += [$locale . '.address' => 'required'];
    
        }//end of  for each

        $rules += ['phone_1' => 'required'];
        $rules += ['map_1' => 'required'];
        $rules += ['email_1' => 'required'];
        $rules += ['phone_2' => 'required'];
        $rules += ['map_2' => 'required'];
        $rules += ['email_2' => 'required'];

        $request->validate($rules);

        $request_data = $request->all();

       
        // dd($request_data);
       
        Contact::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contact.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.address' => 'required'];
           

           

        }//end of  for each

        $rules += ['phone_1' => 'required'];
        $rules += ['map_1' => 'required'];
        $rules += ['email_1' => 'required'];
        $rules += ['phone_2' => 'required'];
        $rules += ['map_2' => 'required'];
        $rules += ['email_2' => 'required'];

        $request->validate($rules);

        $request_data = $request->all();

       
        //  dd($request_data);
       
        $contact->update($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.contact.index');
    }
}
