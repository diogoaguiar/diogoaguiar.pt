<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportSite extends Command
{
    protected $signature = 'site:export {--output=dist : Output directory}';

    protected $description = 'Export the site as static HTML';

    public function handle(): int
    {
        $output = base_path($this->option('output'));

        if (File::isDirectory($output)) {
            File::deleteDirectory($output);
        }

        File::makeDirectory($output, 0755, true);

        // Render the homepage
        $html = view('pages.public.home')->render();

        // Fix asset paths for production
        $html = str_replace('http://localhost/', '/', $html);

        File::put($output.'/index.html', $html);

        // Copy public assets (excluding PHP files)
        $publicPath = public_path();

        foreach (File::allFiles($publicPath) as $file) {
            if ($file->getExtension() === 'php') {
                continue;
            }

            $relativePath = $file->getRelativePathname();
            $destPath = $output.'/'.$relativePath;

            File::ensureDirectoryExists(dirname($destPath));
            File::copy($file->getPathname(), $destPath);
        }

        $this->info("Site exported to {$output}");

        return self::SUCCESS;
    }
}
