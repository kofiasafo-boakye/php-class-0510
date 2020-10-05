<?php
function get_menus($user_role) {
    if($user_role<3) {  // then it is a faculty(1) or and fi(2)
        $menus = <<<__FACULTY
            <div class="menu-item"><span class="tooltip">Opening Screen</span><A id="mi-Home" href="/ash-attend" target="_self" >Home</A></div>
            <div class="menu-item"><span class="tooltip">Your Dashboard</span><A id="mi-Dashboard" href="dashboard.php" target="_self" class="active-menu">Dashboard</A></div>
            <div class="menu-item"><span class="tooltip">Mark attendance</span><A id="mi-Mark" href="mark_attendance.php" target="_self" >Mark</A></div>
            <div class="menu-item"><span class="tooltip">Past Attendance</span><A id="mi-Past" href="attendance_log.php" target="_self" >Past</A></div>
            <div class="menu-item"><span class="tooltip">Add Student with email</span><A id="mi-Add" href="add_student.php" target="_self" >Add Student</A></div>
            <div class="menu-item"><span class="tooltip">Add, Remove, and Edit sessions</span><A id="mi-Sessions" href="manage_sessions.php" target="_self" >Sessions</A></div>
            <div class="menu-item"><span class="tooltip">Log Out of Attendance system</span><A id="mi-Logout" href="../login/logout.php" target="_self" >Logout</A></div>
        __FACULTY;
    } else {
        $menus = <<<__STUDENT
        <A id="mi-Home" href="/ash-attend" target="_self" >Home</A></div>
        <div class="menu-item"><span class="tooltip">Your Dashboard</span><A id="mi-Dashboard" href="dashboard.php" target="_self" class="active-menu">Dashboard</A></div>
        <div class="menu-item"><span class="tooltip">Past Attendance</span><A id="mi-Past" href="attendance_log.php" target="_self" >Past</A></div>
        <div class="menu-item"><span class="tooltip">Log Out of Attendance system</span><A id="mi-Logout" href="../login/logout.php" target="_self" >Logout</A></div>
        __STUDENT;

    }
    return $menus;
}