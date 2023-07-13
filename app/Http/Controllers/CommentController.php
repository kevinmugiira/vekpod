<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

//        dd($request->episode_id);
        if (Auth::check())
        {

//            if ($request->has('episode_id'))
//            {
//                $id = $request->episode_id;
//                return $id;
//            }
//            else
//            {
//                return redirect()->back()->with('message', 'no id found');
//            }
            $validator = Validator::make($request->all(),[
                'comment_body' => 'required|string'
            ]);

            if ($validator->fails())
            {
                return redirect()->back()->with('message', 'Comment area is mandatory');
            }

            $episode = Episode::where('id', $request->episode_id)->first();
//            dd($episode);
            if ($episode)
            {
                Comment::create([
                    'episode_id' => $request->episode_id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);


                return redirect()->back()->with('success', 'Commented successfully!');
            }
            else
            {
                return redirect()->back()->with('failed', 'No such episode found');
            }
        }
        else
        {
            return redirect('login')->with('message', 'Login first to comment');
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
        $comment = Comment::find($id);

//        dd($comment);
        if (!$comment)
        {
            return redirect()->back()->with('failed', 'comment not found!');
        } else {

            $comment->delete();

            return redirect()->back()->with('success', 'comment deleted');
        }

    }

    public function check()
    {
        return view('layouts.layout-browse');
    }
}
