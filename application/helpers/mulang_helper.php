<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('mulang')) {
    function mulang($language = null)
    {
        $CI =& get_instance();

        if ($language == null || ($language != 'id' && $language != 'en')) {
            if($CI->session->userdata('language') == 'id' || $CI->session->userdata('language') == 'en'){
                $language = $CI->session->userdata('language') ? $CI->session->userdata('language') : 'id';
            }else{
                $language = 'id';
            }
        }

        $CI->session->set_userdata('language', $language);
        return $language;
    }
}

if (!function_exists('load_mulang')) {
    function load_mulang($language)
    {
        $CI =& get_instance();
        $path = APPPATH . 'language/portal.json';
        if (file_exists($path)) {
            $json_content = file_get_contents($path);
            $language_data = json_decode($json_content, true);
            $language_messages = array();
            foreach ($language_data as $key => $value) {
                if (isset($value[$language])) {
                    $language_messages[$key] = $value[$language];
                }
            }
            return $language_messages;
        } else {
            return array(); 
        }
    }
}
