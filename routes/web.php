<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//    $files = File::files(resource_path("posts"));
//    $documents = [];
//    foreach ($files as $file) {
//        $documents = YamlFrontMatter::parseFile($file);
//    }
//  ddd($documents);
//    $document = YamlFrontMatter::parseFile(
//        resource_path('posts/my-fourth-post.html')
//    );
//
//    ddd($document->date);
//    return view('posts', [
//        'posts' => Post::all()



//    ]);
Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});


Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z\-]+');


//    $posts = array_map(function ($file) {
//        $document = YamlFrontMatter::parseFile($file);
//
//        return new Post(
//            $document->title,
//            $document->excerpt,
//            $document->date,
//            $document->body(),
//            $document->slug
//        );
//    }, $files);
//


//    $posts = array_map(function ($file) {
//        $document = YamlFrontMatter::parseFile($file);
//        return new Post(
//            $document->title,
//            $document->excerpt,
//            $document->date,
//            $document->body(),
//            $document->slug
//        );
//    });

//    ddd($posts[0]->title);

//collect(File::files(resource_path("posts")))
//    ->map(fn($file) => YamlFrontMatter::parseFile($file))
//    ->map(fn($document) => new Post(
//        $document->title,
//        $document->excerpt,
//        $document->date,
//        $document->body(),
//        $document->slug
//    ));
