<?php

use Illuminate\Support\Facades\File;

beforeEach(function () {
    $this->outputDir = base_path('dist-test');
});

afterEach(function () {
    if (File::isDirectory($this->outputDir)) {
        File::deleteDirectory($this->outputDir);
    }
});

it('exports the site with flux js assets', function () {
    $this->artisan('site:export', ['--output' => 'dist-test'])
        ->assertSuccessful();

    expect($this->outputDir.'/index.html')->toBeFile();
    expect($this->outputDir.'/flux/flux.js')->toBeFile();
});
