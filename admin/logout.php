<?php
    session_start();
    session_unset();
    session_destroy();
    header('Refresh: 0.005; URL="../index.php"')
    ?>