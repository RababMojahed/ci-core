<?php

if (!function_exists('lang')) {
    /**
     * get lang
     *
     * @param  string $key key lang
     * @return mixde
     */
    function lang($key = null)
    {
        $CI = &get_instance();
        return $CI->lang->line($key);
    }
}

if (!function_exists('view')) {
    /**
     * load view as blade tempale
     *
     * @param  string $file
     * @param  array $data
     * @return view
     */
    function view($file, array $data = [])
    {
        $CI = &get_instance();

        return $CI->load->blade($file, $data);
    }
}


if (!function_exists('csrf_field')) {

    function csrf_field()
    {
        $ci = &get_instance();

        $name = $ci->security->get_csrf_token_name();
        $value = $ci->security->get_csrf_hash();

        return '<input type="hidden" name="' . $name . '" value="' . $value . '">';
    }
}

if (!function_exists('middleware')) {
    /**
     * Load middleware width helper
     *
     * @param $middleware
     */
    function middleware($middleware)
    {
        $CI =& get_instance();

        if (is_array($middleware)) {
            foreach ($middleware as $midd) {
                $CI->load->middleware($midd);
            }
        } else {
            $CI->load->middleware($middleware);
        }
    }
}

if (!function_exists('helper')) {
    /**
     * Load helper as helper
     *
     * @param $helpers
     */
    function helper($helpers)
    {
        $this->load->helper($helpers);
    }
}
