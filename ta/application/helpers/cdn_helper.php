<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('cdn_url')) {
    function cdn_url($path = '')
    {
        return 'https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/' . $path;
    }
}
