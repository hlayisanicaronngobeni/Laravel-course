<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use JetBrains\PhpStorm\NoReturn;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post

{
    public  $title;
    public  $excerpt;
    public $date;
    public $body;
    public $slug;

//    /**
//     * @param $title
//     * @param $excerpt
//     * @param $date
//     * @param $body
//     */
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortByDesc('date');
        });

    }
    public static function find($slug)
    {
        // of all the blog posts, find the one with a slug that matches the one that was requested
        return static::all()->firstwhere('slug', $slug);
    }
}

//$files = File::files(resource_path("posts/"));
//
//return array_map(fn($file) => $file->getContents(), $files);

// if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
//     throw new ModelNotFoundException();
//}
//
//return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
