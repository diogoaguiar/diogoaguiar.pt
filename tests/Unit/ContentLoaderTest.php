<?php

use App\Services\ContentLoader;

it('loads and parses a content file', function () {
    $loader = app(ContentLoader::class);
    $content = $loader->load('home');

    expect($content)->toBeArray()
        ->toHaveKeys(['meta', 'html'])
        ->and($content['meta'])->toBeArray()
        ->toHaveKey('title');
});

it('returns html from markdown body', function () {
    $loader = app(ContentLoader::class);
    $content = $loader->load('about');

    expect($content['html'])->toBeString()
        ->toContain('<h2>');
});

it('throws on nonexistent file', function () {
    $loader = app(ContentLoader::class);
    $loader->load('nonexistent');
})->throws(RuntimeException::class, 'Content file not found: nonexistent.md');
