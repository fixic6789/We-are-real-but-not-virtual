<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $posts = Post::latest()->paginate(25);

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'cover' => 'required|image|max:2048',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png,gif,pdf|max:2048',
            'was_published' => 'required',
        ]);

        if($request->hasFile("cover")) 
        {
            $file = $request->file("cover");
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);
            $coverSize = File::size(\public_path("cover/".$imageName));

            $post = new Post([
                "title" => $request->title,
                "body" => $request->body,
                "cover" => $imageName,
                "was_published" => $request->was_published,
                "cover_size" => $coverSize,
            ]);

            $post -> save();
        }

        if($request->hasFile("images")) 
        {
            $files = $request -> file("images");
            foreach($files as $file)
            {   
                $imageName = time().'_'.$file->getClientOriginalName();
                $imageSize = $file->getSize();
                $request['post_id'] = $post->id;
                $request['image'] = $imageName;
                $request['image_size'] = $imageSize;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            } 
        }

        return redirect("/admin/posts")->with('success','Story created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        foreach ($post->images as $key => $image) {
            $images[] = "<img src='/images/$image->image' class='file-preview-image' alt='$image->image'>";
            $imageName[] = $image->image;
            $imageSize[] = $image->image_size;
            $imageDeleteUrl[] = "/posts/deleteimage/$image->id";
        }

        $cover = "<img src='/cover/$post->cover' class='file-preview-image' alt='$post->cover'>";
        $coverName = $post->cover;
        $coverSize = $post->cover_size;
        $coverDeleteUrl = "/posts/deletecover/$post->id";

        return view('posts.edit', ['posts'=>$post, 'images'=>$images, 'imageName'=>$imageName, 'imageSize'=>$imageSize, 'imageDeleteUrl'=>$imageDeleteUrl, 'cover'=>$cover, 'coverName'=>$coverName, 'coverSize'=>$coverSize, 'coverDeleteUrl'=>$coverDeleteUrl]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'cover' => 'image|max:2048',
            'images.*' => 'mimes:jpeg,jpg,png,gif,pdf|max:2048',
            'body' => 'required',
            'title' => 'required',
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile("cover"))
        {
            if(File::exists("cover/".$post->cover))
            {
                File::delete("cover/".$post->cover);
            }
            $file = $request->file("cover");
            $post->cover = time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$post->cover);
            $request['cover'] = $post->cover;
        }

        $post->was_published = $request->input('was_published');

        $post->update([
            "title" => $request->title,
            "body" => $request->body,
            "cover" => $post->cover,
            "was_published" => $post->was_published,
        ]);


        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $imageSize = $file->getSize();
                $request['post_id'] = $post->id;
                $request['image'] = $imageName;
                $request['image_size'] = $imageSize;
                $file->move(\public_path("images"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect('/admin/posts')->with('success','Story updated successfully');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        if (File::exists("cover/".$posts->cover))
        {
            File::delete("cover/".$posts->cover);
        } else {
            dd('File does not exist.');
        }

        $images = Image::where("post_id", $posts->id)->get();
        
        foreach($posts->images as $key => $image) 
        {   
            if(File::exists(public_path("images/".$images[$key]->image))) 
            {
                File::delete(public_path("images/".$images[$key]->image));
                $image->delete();
            } else {
                dd('File does not exist.');
            }
        }

        $posts->delete();
        return back()->with('deleted','Story deleted successfully');
    }

    public function deleteImage($id)
    {
        $images = Image::findOrFail($id);
        if(File::exists("images/".$images->image)) 
        {
            File::delete("images/".$images->image);
        }
        
        Image::find($id)->delete();

        return json_encode([
            'initialPreview' => $images,
            'append' => true
        ]);
    }

    public function deleteCover($id)
    {
        $cover = Post::findOrFail($id)->cover;
        if(File::exists("cover/".$cover)) 
        {
            File::delete("cover/".$cover);
        }

        return json_encode([
            'initialPreview' => $cover,
            'append' => true
        ]);
    }
}
