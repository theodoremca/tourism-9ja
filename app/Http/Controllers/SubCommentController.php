<?php

namespace App\Http\Controllers;

use App\SubComment;
use Illuminate\Http\Request;

class SubCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subComments = SubComment::all();
        return view('subComment.index', compact('subComments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subComment = new SubComment();
        return view('subComment.create', compact('subComment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subComment = new SubComment();
        $validator = $subComment->SubCommentValidator($request);
        if ($validator->fails()) {
            return back()->with('status','Comment created successfully.');
        }
        else{
            $subComment = SubComment::create($request->all());
        }

        return view('subComment.index', compact('subComment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubComment  $subComment
     * @return \Illuminate\Http\Response
     */
    public function show(SubComment $subComment)
    {
        return view('subComment.show', compact('subComment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubComment  $subComment
     * @return \Illuminate\Http\Response
     */
    public function edit(SubComment $subComment)
    {
        return view('subComment.edit', compact('subComment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubComment  $subComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubComment $subComment)
    {
        $validator = new SubComment();
        $validator->SubCommentValidator($request);

        $subComment->update($request->all());

        return back()->with('status','Comment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubComment  $subComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubComment $subComment)
    {
        $subComment->delete();

        return back()->with('status','Comment deleted successfully.');
    }
}
