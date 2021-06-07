<?php

abstract class BaseInput extends HtmlElement {
    public $label;
    public $name;
    public $value;

    public function __construct($label = '', $name = '', $value = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    public function render() {
        return sprintf("<div>
        <label>%s</label><br>
            %s
        </div>
        ", $this->label, $this->renderInput());
    }

    abstract function renderInput();
}