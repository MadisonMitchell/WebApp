<?php
    require_once('registerfields.php');
    require_once('registervalidate.php');

    //Add fields with optional initial message
    $validate = new Validate();
    $fields = $validate->getFields();
    $fields->addField('first_name');
    $fields->addField('last_name');
    $fields->addField('phone', 'Use 888-555-1234 format.');
    $fields->addField('email', 'Must be a valid email address.');

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else {
        $action = 'reset';
    }

    $action = strtolower($action);
    switch ($action) {
        case 'reset':
            include 'register.php';
            break;
        case 'register':
            //Copy form values to local variables
            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $phone = trim($_POST['phone']);
            $email = trim($_POST['email']);

            //Validate form data
            $validate->text('first_name', $first_name);
            $validate->text('last_name', $last_name);
            $validate->text('phone', $phone);
            $validate->text('email', $email);

            //Load appropriate view based on hasErrors
            if ($fields->hasErrors()) {
                include 'register.php';
            } else {
                include 'success.php';
            }
            break;
    }
?>
