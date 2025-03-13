<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleIndexResource;
use App\Http\Resources\AuthorIndexResource;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = User::whereHas('articles')->with('articles')->orderBy('name')->get();

        return AuthorIndexResource::collection($authors);
    }
}
