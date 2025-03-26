<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;


class RevisorController extends Controller
{
    public function index() { 
        $articles = Article::all();// Recupera tutti gli articoli 
        return view('revisor.index', compact('articles')); // Passa gli articoli alla vista 
        }

        public function edit($id)
        {
            $article = Article::findOrFail($id);
            $services = Service::all(); // Recupera tutti i servizi
            return view('revisor.edit', compact('article', 'services'));
        }
        
        public function update(Request $request, $id)
        {
            $article = Article::findOrFail($id);
            $article->update($request->all());
            return redirect()->route('revisor.index')->with('success', 'Articolo aggiornato con successo.');
        }
        

    public function destroy($id) {
        $article = Article::findOrFail($id); $article->delete(); 
        return redirect()->route('revisor.index')->with('success', 'Articolo eliminato con successo.'); }
}
