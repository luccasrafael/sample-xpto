<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ExternalApplications;

class ExternalApplicationsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(){
        // get all urls
        $urls = ExternalApplications::all();

        return \view('externalApplications.index', \compact('urls'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(){
        return \view('externalApplications.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(){

        $externalApplication = ExternalApplications::create($this->validatedData());

        return redirect('/externalApplications/' . $externalApplication->id);
    }

    /**
        * Display the specified resource.
        *
        * @param  $externalApplication
        * @return Response
        */
        public function show(ExternalApplications $externalApplication){
            
            return \view('externalApplications.show', compact('externalApplication'));
        }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  $externalApplication
        * @return Response
        */
        public function edit(ExternalApplications $externalApplication){
            
            return \view('externalApplications.edit', compact('externalApplication'));
        }

    /**
    * Update the specified resource in storage.
    *
    * @param  $externalApplication
    * @return Response
    */
    public function update(ExternalApplications $externalApplication){

        $externalApplication->update($this->validatedData());

        return redirect('/externalApplications');
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  $externalApplication
        * @return Response
        */
    public function destroy(ExternalApplications $externalApplication){
        $externalApplication->delete();

        return redirect('/externalApplications');
        
    }

    private function validatedData(){

        return request()->validate([
            'url' => 'required'
        ]);
    }

}
