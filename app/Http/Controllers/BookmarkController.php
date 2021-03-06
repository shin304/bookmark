<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use App\Http\Requests\BookmarkRequest;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarks = Bookmark::orderBy('id', 'desc')->paginate(20);

        return view('bookmarks.index', compact('bookmarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookmarkRequest $request)
    {
        $input = $request->all();

        Bookmark::create($input);

        return redirect()->route('bookmarks.index')
                ->with('status', 'ブックマークを登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {
        // $bookmark = Bookmark::findOrFail($id);
        return view('bookmarks.details', compact('bookmark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        // $bookmark = Bookmark::findOrFail($bookmark);
        return view('bookmarks.edit', compact('bookmark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(BookmarkRequest $request, Bookmark $bookmark)
    {
        $input = $request->all();
        $bookmark->update($input);
        
        return redirect()->route('bookmarks.show', compact('bookmark'))
                ->with('status', 'ブックマークを更新しました。');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();
        return redirect()->route('bookmarks.index')
                ->with('status', 'ブックマークを削除しました。');
    }
}
