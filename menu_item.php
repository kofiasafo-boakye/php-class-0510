<?php
class Menu_Item
{
    public $min_role;
    public $text;
    public $link;
    public $tool_tip;
    function __construct($text, $link, $role, $tool_tip) {
        $this->text = $text;
        $this->link = $link;
        $this->min_role = isset($role) ? $role : 3;
        $this->tool_tip = isset($tool_tip) ? $tool_tip : $text . "Menu Item";
    }
}

?>