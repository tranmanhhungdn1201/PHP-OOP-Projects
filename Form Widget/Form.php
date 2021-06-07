<?php
require_once __DIR__ . '/HtmlElement.php';

class Form extends HtmlElement {
    public $action;
    public $method;
    private $elements = [];

    public function __construct($action = '', $method = 'GET') {
        $this->action = $action;
        $this->method = $method;
    }

    public function addElement(HtmlElement $el) {
        $this->elements[] = $el;
    }

    public function render() {
        $input = implode(PHP_EOL, array_map(function($el){ return $el->render();}, $this->elements));
        return sprintf("<form action='%s' method='%s'>%s</form>", $this->action, $this->method, $input);
    }
}