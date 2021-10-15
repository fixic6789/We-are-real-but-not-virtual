<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewStoriesController extends Controller
{
    public function StoriesList()
    {   
        $stories = Post::select('*')
                                ->from('posts')
                                ->where('was_published', 1)
                                ->orderByDesc('id')
                                ->paginate(4);


        return view('stories', ['stories' => $stories ]);
    }

    public function StorieView($id)
    {        
        $storie = Post::findOrFail($id);
        
        $images = $storie->images;

        foreach ($images as $key => $image) {
            $imagesNames[$key] = $images[$key]->image;
        }

        return view('storie', ['storie' => $storie, 'images' => $images, 'imagesNames' => $imagesNames]);
    }
}
