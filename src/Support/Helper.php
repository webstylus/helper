<?php

namespace Lojazone\Helper\Support;

use Illuminate\Foundation\Mix;
use \Illuminate\Support\Facades\Route;
use \Illuminate\Support\Str;

/**
 * Class Helper
 */
class Helper
{
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string $path
     * @param  string $manifestDirectory
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    public static function mix_url($path, $manifestDirectory = '')
    {
        return url(app(Mix::class)(...func_get_args()));
    }

    /**
     * Get the route and compare
     *
     * @param  string $href
     * @param  string $class
     * @return string
     */
    public static function isActive($href, $class = 'active')
    {
        return $class = (strpos(Route::currentRouteName(), $href) !== false ? $class : '');
    }

    /**
     * Define session with messages notifications
     *
     * @param string $title
     * @param string $message
     * @param string $type = primary, danger, info, warning, secondary
     * @param int $time = mile seconds
     */
    public static function messages(string $title, string $message, string $type = 'info', int $time = 4000)
    {
        session()->flash('title', $title);
        session()->flash('message', $message);
        session()->flash('type', $type);
        session()->flash('time', $time);
    }

    /**
     * List all files from directory selected
     *
     * @param string $directory
     * @return array
     */
    public static function listDir(string $directory)
    {
        $files = [];
        $realPath = public_path($directory);
        $dirFiles = array_diff(scandir($realPath), ['.', '..']);
        shuffle($dirFiles);
        if (count($dirFiles) > 0) {
            foreach ($dirFiles as $file) {
                $files[Str::studly(pathinfo($file, PATHINFO_FILENAME))] = asset($directory . $file);
            }
        }
        return $files;
    }
}
