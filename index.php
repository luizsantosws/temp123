<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: /temperatura/dashboard");
} else {
    header("Location: /temperatura");
}
exit();
