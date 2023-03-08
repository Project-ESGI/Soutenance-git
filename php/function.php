<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
}
    // Ici, vous pouvez stocker les données envoyées par le formulaire dans une base de données ou les envoyer par email
    // ...
    
    // Pour le moment, nous renvoyons simplement une
    