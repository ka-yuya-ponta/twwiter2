<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function index()
    {
      $items = person::all();
      return response()->json([
        'data' => $items
      ], 200);
    }
    public function store(Request $request)
    {
      $item = person::create($request->all());
      return response()->json([
        'data' => $item
      ], 201);
    }
    public function show(person $person)
    {
      $item = person::find($person);
      if ($item) {
        return response()->json([
          'data' => $item
        ], 200);
      } else {
        return response()->json([
          'message' => 'Not found',
        ], 404);
      }
    }
}
