<?php
class Menu_Item
{
    public $min_role;
    public $text;
    public $link;
    public $tool_tip;
    public $active=false;
    function __construct($text, $link, $role, $tool_tip) {
        $this->text = $text;
        $this->link = $link;
        $this->min_role = isset($role) ? $role : 3;
        $this->tool_tip = isset($tool_tip) ? $tool_tip : $text . "Menu Item";
        
    }
    function get_html() {
        $active_class = $this->active ? " class=\"active-menu\" " : "";
        return <<<__MENU
        <div class="menu-item"><span class="tooltip">$this->tool_tip</span><A id="mi-Home" $active_class href="$this->link" target="_self" >$this->text</A>
        </div>
        __MENU;
    }
    function role_can_view($user_role) {
        return $user_role<=$this->min_role;
    }
}

?>