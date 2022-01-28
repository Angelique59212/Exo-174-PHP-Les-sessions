<?php
session_start();

if (isset($_SESSION['color'])) {
    echo "La couleur est :" . $_SESSION['color'];
}

