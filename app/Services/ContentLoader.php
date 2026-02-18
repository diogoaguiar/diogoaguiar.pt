<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class ContentLoader
{
    public function __construct(
        private CommonMarkConverter $converter,
    ) {}

    /**
     * @return array{meta: array<string, mixed>, html: string}
     */
    public function load(string $filename): array
    {
        $path = base_path("content/{$filename}.md");

        if (! file_exists($path)) {
            throw new \RuntimeException("Content file not found: {$filename}.md");
        }

        $mtime = filemtime($path);
        $cacheKey = "content.{$filename}.{$mtime}";

        return Cache::remember($cacheKey, now()->addDay(), function () use ($path) {
            $document = YamlFrontMatter::parseFile($path);

            return [
                'meta' => $document->matter(),
                'html' => $this->converter->convert($document->body())->getContent(),
            ];
        });
    }
}
