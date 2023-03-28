<?php
if($_SESSION['role'] == 3 || $_SESSION['role'] == 1){
    echo '<a class="dropdown-item" href="../Vue/Gestion.php">Gestion</a>';
}else;
