<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $p = Event::orderBy("created_at","desc")->get();
        return response()->json($p, 200);
    }

    public function store(Request $request) {
        $p = new Event($request->all());
        $p->save();
        return response()->json($p, 200);
    }
}
