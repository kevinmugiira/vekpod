<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episode = Episode::all();
        return back()->with(compact('episode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name');
        return view('vekpod.episode.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        request()->validate([
//            'name' => ['required', Rule::unique('episodes', 'name')],
////            'description' => 'required',
////            'podcast_name' => 'required',
////            'category_id'=> 'required',
////            'cover_image' => 'required',
//            'file_path' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|max:100000' // Adjust the maximum file size as needed
//
//        ]);




        $cat = DB::table('categories')->where('id', $request->category_id)->first();

//        dd($cat);
        // Create the first episode of the podcast
        $episode = new Episode();
        $episode->name = $request->name;
        $episode->description = $request->description;
        $episode->podcast_name = auth()->user()->name;
        $episode->category_id = $request->category_id;
        $episode->author = auth()->user()->name;
        $episode->user_id = auth()->user()->id;
//        $episode->podcast_id = $podcast->id; // auth()->user()->name
//        $episode->file_path = $fileName; // Store the same file path for the episode

//        dd($episode);

        if ($request->hasFile('file_path'))
        {
            $video_file = $request->file('file_path');
            $video_extension = $video_file->getClientOriginalExtension();
            $video_filename = time(). '.' .$video_extension;
            $video_file->move('uploads/pods', $video_filename);
            $episode->file_path = $video_filename;
        }

        if ($request->hasFile('cover_image'))
        {
            $image_file = $request->file('cover_image');
            $img_extension = $image_file->getClientOriginalExtension(); //retrieving image extension
            $img_filename = time(). '.' . $img_extension;
            $image_file->move('uploads/cover-images', $img_filename);
            $episode->cover_image = $img_filename;
        }




        // Attach the category to the podcast
//        $category = new Category();
        $category = Category::where('id',$request->category_id)->first();
//        $cat = $request->$category->id;
        $episode->categories()->attach($category);

//        dd($episode);

        $episode->save();

//        return response()->json(['message' => 'Podcast created successfully']);

        if ($episode)
        {
            return back()->with('success', 'Episode created successfully');
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
        $episode = Episode::find($id);
        return back(); // TODO: complete the episode update logic
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
