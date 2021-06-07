<?php
require_once __DIR__ . '/HtmlElement.php';

class Button extends HtmlElement {
    public $value;
    public $name;

    function __construct($value, $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function render()
    {
        return sprintf("<button  name='%s'>%s</button>", $this->name, $this->value);
    }
}