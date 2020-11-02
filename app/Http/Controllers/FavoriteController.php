<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index() {
        $p = Favorite::orderBy("created_at","desc")->get();
        return response()->json($p, 200);
    }

    public function store(Request $request) {
        $p = new Favorite($request->all());
        $p->save();
        return response()->json($p, 200);
    }

    public function update(Request $request, $id) {
        $p = Favorite::findOrFail($id);
        $p->update($request->all());
        return response()->json($p, 200);
    }
}
