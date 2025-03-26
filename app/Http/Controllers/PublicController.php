<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles=Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles')) ;
    }
    
    public function chisiamo()
    {
        return view('chiSiamo.chisiamo');
    }
    public function collaboraconnoi()
    {
        return view('chiSiamo.collaboraconnoi');
    }
    public function terms()
    {
        return view('footer.termini-condizioni');
    }


    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        // Rimuovi la condizione is_accepted
        $articles = Article::search($query)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }
    
    
}
