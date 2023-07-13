<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pod = Podcast::all();
        return view('');
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
        request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'cover_image' => 'required|string',
            'category_id'=> 'required|exists:categories,id',
            'file' => 'required|mimetypes:video/mp4|max:500000', // Adjust the maximum file size as needed

        ]);

        // Store the podcast MP4 file
        $file = $request->file('file');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $fileExtension;
        $file->storeAs('public/podcasts', $fileName);

        // Create the podcast
        $podcast = new Podcast();
        $podcast->name = $request->name;
        $podcast->description = $request->description;
        $podcast->cover_image = $request->cover_image;
        $podcast->file_path = $fileName; // Store the file path in the database

        $podcast->save();

        // Attach the category to the podcast
        $category = Category::find($request->category_id);
        $podcast->category()->attach($category);

        // Create the first episode of the podcast
        $episode = new Episode();
        $episode->name = $request->name;
        $episode->description = $request->description;
        $episode->podcast_id = $podcast->id;
        $episode->file_path = $fileName; // Store the same file path for the episode

        $episode->save();

//        return response()->json(['message' => 'Podcast created successfully']);

        if ($episode)
        {
            return back()->with('success', 'Podcast added successfully');
        } else {
            return back()->with('failed', 'something went wrong!!');
        }
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
