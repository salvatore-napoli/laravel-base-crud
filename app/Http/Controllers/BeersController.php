<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers = Beer::all();

      return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $beersData = $request->all();

      $this->validateForm($request);

      $newBeer = new Beer();
      $newBeer->fill($beersData);
      $newBeer->save();
      $beer = Beer::orderBy('id', 'desc')->first();


      return redirect()->route('beers.show', $beer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
      return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
      $this->validateForm($request);

      $data = $request->all();
      $beer->update($data);

      return redirect()->route('beers.show', compact('beer'));
    }

    protected function validateForm(Request $request) {
      $validation = $request->validate(
        [
          'image' => 'max:2048',
          'brand' => 'required|max:255',
          'price' => 'required|digits_between:1,5',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
      $beer->delete();

      return redirect()->route('beers.index');
    }
}
