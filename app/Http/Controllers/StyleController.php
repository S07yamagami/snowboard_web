<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Style;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $styles = Style::where('user_id', auth()->user()->id)->get();
        return view('style_list', compact('styles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $style = "";
        return view('style_register',compact('style'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $base64 = $file ? base64_encode(file_get_contents($file)) : '';

        Style::create([
            'name' => $request->name,
            'img' => $base64,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('style_list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $style = Style::where('id', $id)
        //               ->where('user_id', auth()->id())
        //               ->firstOrFail();

        // return view('style_edit', compact('style'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $style = Style::where('id', $id)
                      ->where('user_id', auth()->id())
                      ->firstOrFail();

        $style->delete();

        return redirect()->route('style_list')->with('message', 'スタイルを削除しました');
    }
}
