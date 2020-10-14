<?php
include_once "menu_item.php";

class menu extends Menu_Item{
    private $menus;
    public $user_role;
    private $active_menu;

    public function __construct($active_menu = "Home", $user_role = 3){
        $this->user_role = $user_role;
        $this->menus=[
            new Menu_Item("Home","/",3,"Opening Screen"),
            new Menu_Item("Dashboard","dashboard.php",3,"Your Dashboard"),
            new Menu_Item("Mark","mark_attendance.php",3,"Mark Attendance"),
            new Menu_Item("Past","attendance_log.php",3,"Past Attendance"),
            new Pull_Down_Menu_Item("Manage",[new Menu_Item("Add Student","add_student.php",2,"Add A student to the system"),
            new Menu_Item("Sessions","manage_sessions.php",2,"Add, Remove, Edit upcoming class sessions")
        ],2,"Manage Class"),
            new Menu_Item("Logout","../login/logout.php",3,"Logout of system")
        ];

        foreach($this->menus as $menuItem){
            if($active_menu == $menuItem->text){
                $menuItem->active = true;
            }
        }
    }

    function set_user_role($user_role){
        $this->user_role = $user_role;
    }

    public function add_menu_item($newItem){
        array_push($this->menus, $newItem);
    }

    function get_menu_item($menuText){
        foreach($this->menus as $checkItem){
            if($menuText == $checkItem->text){
                return $checkItem;
            }
        }
        return null;
    }
    
    function delete_menu_item($menuText){
        for($i=0; $i < count($this->menus); $i++){
            if ($menuText == $this->menus[$i]->text){
                unset($this->menus[$i]);
            }
        }
    }

    function get_html(){
        if($this->user_role==1){
            $menu_html = "";
            foreach ($this->menus as $menu) {
                $menu->active = $menu->text == $menu->active;
                if($menu->role_can_view($this->user_role)) {
                    $menu_html.= $menu->get_html();
                }
            }
           return $menu_html;

        }elseif($this->user_role==2){
            $menu_html = "";
            foreach ($this->menus as $menu) {
                $menu->active = $menu->text == $menu->active;
                if($menu->role_can_view($this->user_role)) {
                    $menu_html.= $menu->get_html();
                }
            }
           return $menu_html;

        }elseif($this->user_role==3){
            $menu_html = "";
            foreach ($this->menus as $menu) {
                $menu->active = $menu->text == $menu->active;
                if($menu->role_can_view($this->user_role)) {
                    $menu_html.= $menu->get_html();
                }
            }
           return $menu_html;
        }
    }
}

?>