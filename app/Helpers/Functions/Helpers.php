<?php

if ( ! function_exists('str_slug_fa')) {
    function str_slug_fa($title, $separator = '-')
    {
        // Convert all dashes/underscores into separator
        $flip = $separator == '-' ? '_' : '-';

        $title = preg_replace('![' . preg_quote($flip) . ']+!u', $separator, $title);

        // Replace @ with the word 'at'
        $title = str_replace('@', $separator . 'at' . $separator, $title);

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        $title = preg_replace('![^' . preg_quote($separator) . '\pL\pN\s]+!u', '', mb_strtolower($title));

        // Replace all separator characters and whitespace by a single separator
        $title = preg_replace('![' . preg_quote($separator) . '\s]+!u', $separator, $title);

        return trim($title, $separator);
    }
}

//if ( ! function_exists('str_slug_fa')) {
//    /**
//     * @param string $path
//     * @param int $width
//     * @param int $height
//     * @param bool $crop
//     */
//    function image_url(string $path, int $width = null, int $height = null, bool $crop = false)
//    {
//        $img = Image::make($path);
//    }
//}