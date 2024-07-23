<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\UpdateArticleRequest; // Ensure this import is present if you use the class
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        // Fetch all articles and return as JSON
        return response()->json(Article::all());
    }
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                // Remove validation for 'image' if not handling it
            ]);
    
            $input = $request->all();
    

            // Create a new article with the input data
            $article = Article::create($input);

            return response()->json([
                "message" => "Data Uploaded Successfully",
                "data" => $article
            ]);
             } catch (\Exception $e) {

            // Return a JSON response indicating failure
            return response()->json([
                "message" => "Data Upload Failure",
                "error" => $e->getMessage()
            ]);
        }
    }
    
    public function show($id)
    {
        // Fetch article by ID
        $article = Article::find($id);

        if ($article) {
            return response()->json($article);
        } else {
            return response()->json(['message' => 'Article not found'], 404);
        }
    }
}