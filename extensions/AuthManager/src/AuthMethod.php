<?php
namespace CisFoundation\AuthManager;

class AuthMethod {

    public $slug;
    public $class;

    public function __construct($slug,$class)
    {
        $this->slug = $slug;
        $this->class = $class;
    }

}
