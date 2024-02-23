<?php

namespace app\core\form;

use app\core\Model;
use app\core\form\Field;

class Form
{
    protected $html;

    public static function begin($action, $method)
    {
        $form = new self();
        $form->html = sprintf('<form action="%s" method="%s">', $action, $method);
        return $form;
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }

    public function __toString()
    {
        return $this->html . PHP_EOL;
    }
}