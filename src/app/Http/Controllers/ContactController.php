<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index() {
        $categories = Category::all();
        // dd($categories);
        return view('contact', compact('categories'));
    }

    public function confirm(ContactRequest $request) {
        $form = $request->all();
        // dd($form);
        $category = Category::where('id',$request->category_id)->first();
        // dd($category);


        return view('confirm', compact('form','category'));
    }

    public function store(Request $request) {
        if($request->has('store')) {
            $form = $request->only([
                'category_id',
                'first_name',
                'last_name',
                'gender',
                'email',
                'tel',
                'address',
                'building',
                'detail',
            ]);
            // dd($form);
            Contact::create($form);

            return view('thanks');
        }

        if($request->has('back') == 'back'){
            return redirect('/')->withInput();
        }

    }

}
