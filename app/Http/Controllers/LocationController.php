<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LocationRequest;
use App\Location;

class LocationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allapi()
    {
        $location = Location::all()->take(30);

        return $location;
    }

    public function api($key)
    {
        $location = Location::where('name', 'REGEXP', $key)->get();

        return $location;
    }

    public function create()
    {
    	return view('admin.create');
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        \Session::flash('flash_message', 'Data berhasil dihapus');

        return redirect('/lokasi');
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.edit', ['location' => $location]);
    }

    public function index()
    {
    	$location = Location::all();

    	return view('admin.location', ['locations' => $location]);    	
    }

    public function map()
    {
        return view('admin.map');
    }

    public function store(LocationRequest $request)
    {
        $location = new Location;
        \Auth::user()->location()->create($request->all());
        \Session::flash('flash_message', 'Data lokasi telah ditambahkan');

        return redirect('/lokasi');
    }

    public function show($id)
    {
        $location = Location::findOrFail($id);

        return $location;
    }

    public function update($id, Request $request)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());
        \Session::flash('flash_message', 'Data telah diupdate');

        return redirect('/lokasi');
    }
}