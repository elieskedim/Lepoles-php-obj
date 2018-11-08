<?php
session_start();

if(isset($_GET['action']) && $_GET['action'] == 'vider'){
    unset($_SESSION['panier']); 
}