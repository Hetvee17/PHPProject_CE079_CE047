<?php

require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/UserTable.php';

start_session();

// try to register the user - if there are any error/
// exception, catch it and send the user back to the
// login form with an error message
try {
    $formdata = array();
    $errors = array();
    
    $input_method = INPUT_POST;

    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    
    // are empty
    if (empty($formdata['username'])) {
        $errors['username'] = "Username required";
    }
    
    if (empty($formdata['password'])) {
        $errors['password'] = "Password required";
    }
    if (empty($errors)) {
        // store the form data in variables
        $username = $formdata['username'];
        $password = $formdata['password'];

        // create a UserTable object 
        $connection = DB::getConnection();
        $userTable = new UserTable($connection);
        $user = $userTable->getUserByUsername($username);

        if ($user == null) {
            $errors['username'] = "Username is not registered";
        }
        else {
            if ($password !== $user->getPassword()) {
                $errors['password'] = "Password is incorrect";
            }
        }
    }
    
    if (!empty($errors)) {
        throw new Exception("");
    }
    
    // username is not  registered, 
    // create a new User object
    $_SESSION['user'] = $user;
    
    header('Location: index.php');
    }
    catch (Exception $ex) {
        $errorMessage = $ex->getMessage();
        require 'login_form.php';
    }
    ?>
