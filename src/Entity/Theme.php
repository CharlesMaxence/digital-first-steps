<?php

class Theme {
    private $id;
    private $theme;

    public function __construct($id, $theme) {
        $this->id = $id;
        $this->theme = $theme;
}
public function get_id() {
    return $this->id;
}
public function get_theme() {
    return $this->theme;
}
public function set_theme($theme) {
    $this->theme = $theme;
}
}