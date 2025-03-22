<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Top;

class PreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function user_top($user_id)
    {
        $top = Top::where('user_id', $user_id)->first();

        if (!$top) {
            abort(404);
        }

        return view('user_top', compact('top'));
    }


}
