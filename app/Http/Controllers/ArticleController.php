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

    /**
     * Show the form for creating a new article.
     */
    public function create()
    {
        // Not typically used in API controllers
    }

    /**
     * Store a newly created article in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image', // Adjust based on your requirements
        ]);

        $input = $request->all();

        // Handle the image upload if it's present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $input['image'] = $imagePath;
        }

        // Create a new article with the input data
        $article = Article::create($input);

        // Return a JSON response based on the success of the operation
        return response()->json([
            'message' => 'Data Uploaded Successfully',
            'data' => $article
        ], 201); // 201 status code for resource creation
    }

    /**
     * Display the specified article.
     */
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

    /**
     * Update the specified article in storage.
     */
    public function update(UpdateArticleRequest $request, $id)
    {
        // Fetch the article to update
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        // Validate the request data
        $request->validated(); // Use validated data from the UpdateArticleRequest

        // Update the article with the input data
        $article->update($request->all());

        // Return a JSON response
        return response()->json([
            'message' => 'Article updated successfully',
            'data' => $article
        ]);
    }

    /**
     * Remove the specified article from storage.
     */
    public function destroy($id)
    {
        // Fetch the article to delete
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        // Delete the article
        $article->delete();

        // Return a JSON response
        return response()->json(['message' => 'Article deleted successfully']);
    }
}
