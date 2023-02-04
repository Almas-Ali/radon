<?php

class Theme
{

    public $theme;
    public $theme_path;

    public function __construct()
    {
        $this->theme      = THEME;
        $this->theme_path = 'contents/themes/' . $this->theme . '/';
    }

    public function get_theme()
    {
        return $this->theme;
    }

    public function get_theme_path()
    {
        return $this->theme_path;
    }

    public function get_theme_file($file)
    {
        require $this->theme_path . $file;
    }

    public function get_static_file($file)
    {
        return $this->theme_path . 'layout/' . $file;
    }

}
