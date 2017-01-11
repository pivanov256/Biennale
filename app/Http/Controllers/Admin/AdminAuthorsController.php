<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Author;
use Storage;
use App\Http\Controllers\Controller;
use Image;

class AdminAuthorsController extends Controller
{
    public function add(Request $request)
	{
		return view('authors.create');
	}

    public function create(Request $request)
    {
    	$this->validate($request, $this->validationRules());

    	$author = new Author();
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');

        $img = Image::make($request->file('photo')->getRealPath())->encode('data-url');
        $author->photo = $img;

        $author->save();

        return redirect('/admin/authors');
    }

    public function all(Request $request)
    {
    	$authors = Author::all();
    	return view('authors.allAuthors', [ 'authors' => $authors ]);
    }

    public function show($id)
    {
    	$author = Author::find($id);
    	return base64_encode(file_get_contents('C:\Users\Dimitar\Desktop\asd.jpg'));  //$author;//view('TODO', [ 'author' => $author ]);
    }

    public function edit(Request $request, $id)
    {
    	$author = Author::find($id);
    	return view('authors.edit', [ 'author' => $author ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, $this->validationRules());

    	$author = Author::find($id);
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');
    	
        if ($request->hasFile('photo')) {

            $img = Image::make($request->file('photo')->getRealPath())->encode('data-url');
            $author->photo = $img;
        }

    	$author->save();

    	return redirect('/admin/authors');
    }

    public function delete(Request $request, $id)
    {
    	$author = Author::find($id);
    	$author->delete();

        return redirect('/admin/authors');
    }

    private function validationRules()
    {
    	return [
    		'name' => 'required|max:100',
    		'country' => 'required|max:100',
    		'info' => 'required'
    	];
    }
}