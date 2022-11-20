<?php

use JetBrains\PhpStorm\NoReturn;

/**
 * Convert the string with hyphens to StudlyCaps,
 * e.g. post-authors => PostAuthors
 *
 * @param string $string The string to convert
 *
 * @return string
 */
if (!function_exists('dump')) {
    function dump(): void
    {
        array_map(function ($query) {
            echo "<pre>";
            var_dump($query);
            echo "</pre>";
        }, func_get_args());
    }
}

/**
 * Convert the string with hyphens to StudlyCaps,
 * e.g. post-authors => PostAuthors
 *
 * @param string $string The string to convert
 *
 * @return string
 */
if (!function_exists('dd')) {
    #[NoReturn] function dd(): void
    {
        array_map(function ($query) {
            echo "<pre>";
            var_dump($query);
            echo "</pre>";
        }, func_get_args());
        die();
    }
}

/**
 * Convert the string with hyphens to StudlyCaps,
 * e.g. post-authors => PostAuthors
 *
 * @param string $string The string to convert
 *
 * @return string
 */
function convertToStudlyCaps(string $string): string
{
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
}

/**
 * Convert the string with hyphens to camelCase,
 * e.g. add-new => addNew
 *
 * @param string $string The string to convert
 *
 * @return string
 */
function convertToCamelCase(string $string): string
{
    return lcfirst(convertToStudlyCaps($string));
}