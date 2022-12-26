<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;


class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::orderBy('id','desc')->paginate(5);
        Paginator::useBootstrap();
        return view('companies.index', compact('companies'));

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' =>'required|max:255',
            'email'=>'required|email|max:255|unique:companies',
            'address' =>'required|max:255'
        ]);
        Company::create($request->post());
        return redirect()->route('companies.index')->with('success','Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
       // return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {

        //
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        $request->validate([
            'name' =>'required|max:255',
            'email'=>'required|email|max:255,email,',
            'address' =>'required|max:255']);

            $company->fill($request->post())->save();
            return redirect()->route('companies.index')->with('success','Company updated successfully.');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return redirect()->route('companies.index')->with('success','Company deleted successfully.');
    }
}
