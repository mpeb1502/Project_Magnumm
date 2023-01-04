<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class GetImagesController extends Controller {
    public function displayImage($filename){
        $path = storage_path('app/public/post-images/'.$filename);
        if(!File::exists($path)){
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header('Content-Type', $type);

        return $response;
    }
}


// Buat d route
Route::get('/storage/post-images/{filename}',[GetImagesController::class,'displayImage'])->name('image.displayImage');


use App\Http\Controllers\GetImagesController;



// Posts
<img src="{{ route('image.displayImage' , $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"class="img-fluid">
<img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">



<img src="{{ route('image.displayImage' , $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">

// Post
 <img src="{{ route('image.displayImage' , $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                            

// Show post
<img src="{{ route('image.displayImage' , $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">

// Dashboard post controller
 // $validateData['image'] = $request->file('image')->store('post-images');
            $img = $request ->file('image')->store('post-images');
            $imgSplit = explode('/', $img);
            $validatedData['image'] = $imgSplit[1];
