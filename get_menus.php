<?php
include_once "menu_item.php";

function get_menus($user_role) {
   $menus = [
       new Menu_Item("Home","/",3,"Opening Screen"),
       new Menu_Item("DashBoard","dashboard.php",3,"Your Dashboard"),
       new Menu_Item("Mark","mark_attendance.php",3,"Mark Attendance"),
       new Menu_Item("Past","attendance_log.php",3,"Past Attendance"),
       new Menu_Item("Add Student","add_student.php",2,"Add A student to the system"),
       new Menu_Item("Sessions","manage_sessions.php",2,"Add, Remove, Edit upcoming class sessions"),
       new Menu_Item("Logout","../login/logout.php",3,"Logout of system")
   ];
   $menu_html = "";
    foreach ($menus as $menu) {
        if($user_role<=$menu->min_role) {
            $menu_html.= <<<__MENU
            <div class="menu-item"><span class="tooltip">$menu->tool_tip</span><A id="mi-Home" href="$menu->link" target="_self" >$menu->text</A>
            </div>
            __MENU;
        }
    }
   return $menu_html;
}