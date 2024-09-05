<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function admin() {
        $text = null;
        $gender = null;
        $content = null;
        $date = null;
        $contacts = Contact::with('category')->orderBy('created_at', 'desc')->simplePaginate(7);
        // dd($contacts);
        $categories = Category::all();
        // dd($category);
        return view('admin', compact('contacts', 'categories','text', 'gender','content', 'date'));
    }

    public function search(Request $request) {
        // dd($request);
        $text = ($request->text_search) ? $request->text_search : null;
        $gender = ($request->gender_search) ? $request->gender_search : null;
        $content = ($request->content_search) ? $request->content_search : null;
        $date = ($request->date_search) ? $request->date_search : null;

        $categories = Category::all();
        $contacts = Contact::with('category')
        ->TextSearch($request->text_search)
        ->ContentSearch($request->content_search)
        ->GenderSearch($request->gender_search)
        ->DateSearch($request->date_search)
        ->simplePaginate(7);
        // dd($contacts);

        return view('admin', compact('contacts', 'categories', 'text', 'gender','content', 'date'));
    }
}
