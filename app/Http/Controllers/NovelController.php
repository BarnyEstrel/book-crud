<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    //show all novels page

    public function index(){
        $models = Novel::all();
        return view('novels/index', ['models' => $models]);
    }

    //add new novel page
    public function create(){
        $model = new Novel();
        return view('novels/form', ['model' => $model]);
    }
    

    public function update(){
        
    }

    public function store(Request $request, $is_new_novel = true){
        $form_fields = Novel::get_fields($request);
        if($is_new_novel){
            Novel::create($form_fields);
            return redirect('/');
        }

    }

    public function delete(){
        
    }
}
