<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Ratchet Websocket Library: helper file
 * @author Romain GALLIEN <romaingallien.rg@gmail.com>
 */
if (!function_exists('valid_json')) {

    /**
     * Check JSON validity
     * @method valid_json
     * @author Romain GALLIEN <romaingallien.rg@gmail.com>
     * @param  mixed  $var  Variable to check
     * @return bool
     */
    function valid_json($var) {
        return (is_string($var)) && (is_array(json_decode($var, true))) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
    }
}


/**
 * Ratchet Websocket Library: helper file
 * @author Romain GALLIEN <romaingallien.rg@gmail.com>
 */
if (!function_exists('output')) {

    /**
     * Output valid or invalid logs
     * @method output
     * @author Romain GALLIEN <romaingallien.rg@gmail.com>
     * @param  string  $type  Log type
     * @param  string  $var   String
     * @return string
     */
    function output($type = 'success', $output = null) {
        if ($type == 'success') {
            echo "\033[32m".$output."\033[0m".PHP_EOL;
        } elseif($type == 'error') {
            echo "\033[31m".$output."\033[0m".PHP_EOL;
        } elseif($type == 'fatal') {
            echo "\033[31m".$output."\033[0m".PHP_EOL;
            exit(EXIT_ERROR);
        } else {
            echo $output.PHP_EOL;
        }
    }
}
