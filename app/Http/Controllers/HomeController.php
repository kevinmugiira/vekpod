<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Episode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $scienceEpisodes = Episode::where('category_id', 'Science')->paginate(6);
        $newEpisodes = Episode::where('category_id', 'New')->get();
        $trendingEpisodes = Episode::where('trending', 1)->get();
        $politicalEpisodes = Episode::where('category_id', 'Politics')->get();
        $categories = Category::all();

        $currentYear = Carbon::now()->year;

        return view('vekpod.home',
            compact('trendingEpisodes',
                'politicalEpisodes',
                          'newEpisodes',
                          'scienceEpisodes',
                          'currentYear',
                          'categories'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
