<?php

namespace App\Http\Controllers;
use App\Models\good;
use Illuminate\Http\Request;

class goodsController extends Controller
{
    //   //
    public function index()
    {
        $items =good::all();
        return response()->json([
        'data' => $items
      ], 200);
    }
    public function store(Request $request)
    {
        $item =good::create($request->all());
        return response()->json([
        'data' => $item
      ], 201);
    }
    public function show(good $good)
    {
        $item =good::find($good);
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
    public function destroy(good $good)
    {
        $item =good::where('id', $good->id)->delete();
        if ($item) {
            return response()->json([
          'message' => 'Deleted successfully',
        ], 200);
        } else {
            return response()->json([
          'message' => 'Not found',
        ], 404);
        }
    }
}
