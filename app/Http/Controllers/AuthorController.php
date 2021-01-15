<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\AuthorCollection
     */
    public function index()
    {
        return new AuthorCollection(Author::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Author $author)
    {
        return response()->json(new AuthorResource($author), Response::HTTP_OK);
    }
}
