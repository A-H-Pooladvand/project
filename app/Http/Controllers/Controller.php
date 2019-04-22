<?php

namespace App\Http\Controllers;

use URL;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Artesaos\SEOTools\Traits\SEOTools as SeoTrait;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, SeoTrait;

    protected function setSeo(object $post = null, string $title = null, string $description = null, string $image = null, string $created_at = null, string $category = null, array $tags = null, string $type = null): void
    {
        $this->seo()->setTitle($post->title ?? $title);
        $this->seo()->setDescription($post->summary ?? $post->description ?? $post->content ?? $description);
        $this->seo()->metatags()->addMeta('article:published_time', $post->created_at ?? $created_at, 'property');
        $this->seo()->metatags()->addMeta('article:section', ! empty($post) && ! empty($post->category) ? $post->category->title : $category, 'property');
        $this->seo()->metatags()->addKeyword(! empty($post) && ! empty($post->tags) ? $post->tags()->toArray() : $tags);
        $this->seo()->opengraph()->setTitle($post->title ?? $title);
        $this->seo()->opengraph()->setDescription($post->summary ?? $post->description ?? $post->content ?? $description);
        $this->seo()->opengraph()->setUrl(URL::current());
        $this->seo()->opengraph()->addProperty('type', $type ?? 'article');
        $this->seo()->addImages($post->image ?? $image);
    }
}