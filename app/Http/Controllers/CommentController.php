<?php

namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    
        //
        public function index()
        {
          $items = comment::all();
          return response()->json([
            'data' => $items
          ], 200);
        }
        public function store(Request $request)
        {
          $item = comment::create($request->all());
          return response()->json([
            'data' => $item
          ], 201);
        }
        public function show(comment $comment)
        {
          $item = comment::find($comment);
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
