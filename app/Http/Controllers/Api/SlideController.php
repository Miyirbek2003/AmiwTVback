<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        try {
            $slides = Slide::all();

            if (count($slides) > 0) {
                return response()->json([
                    "status" => true,
                    "items" => $slides
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "items" => []
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "status" => false,
                "message" => "Error",
                "errors" => $th->getMessage()
            ]);
        }
    }
    public function show($id)
    {
        try {
            $slide = Slide::where("id", $id)->first();
            if ($slide != null) {
                return response()->json([
                    "status" => true,
                    "item" => $slide
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "message" => "Not found",
                    "item" => []
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "status" => false,
                "message" => "Error",
                "errors" => $th->getMessage()
            ]);
        }
    }
}
