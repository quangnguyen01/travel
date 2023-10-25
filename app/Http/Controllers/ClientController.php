<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Type;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home() {
        $types = Type::query()->limit(3)->get();
        $last_type = Type::latest('id')->first();
        $query = Article::query();
        $articles = $query->where('is_feature', 1)->limit(3)->get();
        return view('clients.index', ['type' => $types, 'articles' => $articles, 'lastType' => $last_type]);
    }

    public function list(Request $request) {
        $query = Article::query();
        $type = $request->get('type');
        $search = $request->get('search');
        $feature = Article::query()->where('is_feature', 1)->limit(3)->get();

        if ($search || strlen($search) > 0) {
            $query = $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%')
                ->orWhere('author', 'like', '%' . $search . '%');
        }

        if ($type) {
            $query = $query->where('type_id', $type);
        }

        $articles = $query->orderBy('created_at', 'DESC')->paginate(9);
        return view('clients.articles', ['article' => $articles, 'articles' => $feature]);
    }
    public function detail($id) {
        $article = Article::find($id);
        return view('clients.detail', [
            'article' => $article,
        ]);
    }

    public function cuisine() {
        $article = Article::query()->where('type_id', 4)->get();
        return view('clients.cuisine', ['article' => $article]);
    }

    public function travel() {
        $article = Article::query()->whereIn('type_id', [1,2,3])->get();
        return view('clients.travel', ['article' => $article]);
    }

    public function culture() {
        $article = Article::query()->where('type_id', 5)->get();
        return view('clients.culture', ['article' => $article]);
    }
}
