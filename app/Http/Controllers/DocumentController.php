<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\CustomerContact;
use App\Invoice;
use App\Project;
use App\Feedback;
use App\Contact;
use App\Customer;
use App\Quatation;
use App\Requirement;
use DateTime;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::findOrFail(3);
        $projects = Customer::findOrFail(3)->projects()->get();
        return view('document.index')->with('projects',$projects)->with('customer',$customer);
    }
    public function document($id)
    {

        $requirements = Project::findOrFail($id)->requirements()->get();
        $invoices = Project::findOrFail($id)->invoices()->get();
        $quatations = Project::findOrFail($id)->quatations()->get();
        $contacts = Project::findOrFail($id)->contacts()->get();
        $customercontacts = Project::findOrFail($id)->customercontacts()->get();
        return  \View::make('document.document')->with('requirements', $requirements)->with('invoices', $invoices)
        ->with('quatations',$quatations)->with('contacts', $contacts)->with('customercontacts', $customercontacts)->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function uploadDoc($id)
     {
       $project = Project::find($id);
       return view('document.uploadDoc')->with('project',$project);
     }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function createFeedback(Request $request)
     {
       $feedback = new Feedback;
       $now = new DateTime();
       $feedback->date = $now;
       $feedback->profile_id = $request->profile_id;
       $feedback->requirement = $request->requirement;
       $feedback->complacency = $request->complacency;
       $feedback->price = $request->price;
       $feedback->ontime = $request->ontime;
       $feedback->convinience = $request->convinience;
       $feedback->suggestion = $request->suggestion;
       $feedback->fullname = Auth::user()->firstname.Auth::user()->lastname;
       $feedback->save();
       return redirect()->route('document.document');
     }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
