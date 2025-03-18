<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Top;

class TopController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $top = Top::where('user_id', auth()->user()->id)
                    ->first();
        
        return view('top_register', compact('top'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $top = Top::where('user_id', auth()->user()->id)
                    ->first();

        $file = $request->file('img');
        $base64 = $file ? base64_encode(file_get_contents($file)) : $top->img;

        Top::updateOrCreate(
            ['user_id' => auth()->user()->id]
            ,[
                'description' => $request->description,
                'img' => $base64 ?? '',
                'user_id' => auth()->user()->id,
            ]
        );
        return redirect()
                    ->back()
                    ->with('success', '登録が完了しました！');
    }
}
