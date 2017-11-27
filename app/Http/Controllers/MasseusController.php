<?php

namespace App\Http\Controllers;

use App\Massage_Service;
use App\User;
use Illuminate\Http\Request;

class MasseusController extends Controller
{
    public function index()
    {
        $masseuss = Massage_Service::all();
        return view('home', compact('masseuss', 'users'));
    }

    public function search(Request $request)
    {
        $query   = $request->get('q');
        $results = Massage_Service::where('name', 'LIKE', '%' . $query . '%')->paginate(2);

        return view('masseus.search_results', compact('query', 'results'));
    }       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masseus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masseus = Massage_Service::find($id);
        return view('masseus.single', compact('masseus'));
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
