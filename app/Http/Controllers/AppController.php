<?php

namespace App\Http\Controllers;

use App\File;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    public function createResourse(Request $request) {
        $gallery = new Gallery();
        $gallery->name = $request->input('name');
        $gallery->user_id = $request->user()->id;

        $f = new File();
        $file = $request->file('file');
        $fileName = 'gallery-'.time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('files', $fileName);
        $f->name = $fileName;
        $f->size = $file->getSize();
        $f->type = $file->getType();
        $f->url = $path;
        $f->user_id = $request->user()->id;
        $f->save();

        $gallery->file_id = $f->id;
        $gallery->save();
        foreach ($request->input('categories') as $cat) {
            $gallery->categories()->attach($cat);
        }
        return redirect('/home');
    }
}
