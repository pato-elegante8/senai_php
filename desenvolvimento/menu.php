<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    echo "<a href='inicio.php' style='color:#00008B;text-decoration:none;font-weight:bold;'>HOME</a>";
    echo "<b><font color='#00008B'> | </font></b>";
    echo "<a href='usu_sejuc.php' style='color:#00008B;text-decoration:none;font-weight:bold;'>USUÁRIOS</a>";
    echo "<b><font color='#00008B'> | </font></b>";
    echo "<a href='quest.php' style='color:#00008B;text-decoration:none;font-weight:bold;'>QUEST</a>";
?>