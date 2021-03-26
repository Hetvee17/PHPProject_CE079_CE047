<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/UserTable.php';

start_session();

// login form with an error message
try {
    $formdata = array();
    $errors = array();
    
    $input_method = INPUT_POST;

    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    $formdata['cpassword'] = filter_input($input_method, "cpassword", FILTER_SANITIZE_STRING);

    // are empty
    if (empty($formdata['username'])) {
        $errors['username'] = "Username required";
    }

    if (empty($_POST['password'])) {
        $errors['password'] = "Password required";
    }
    if (empty($formdata['cpassword'])) {
        $errors['cpassword'] = "Confirm password required";
    }
    // if the password fields do not match 
    if (!empty($formdata['password']) && !empty($formdata['cpassword']) 
            && $formdata['password'] != $formdata['cpassword']) {
        $errors['password'] = "Passwords must match";
    }

    if (empty($errors)) {
        // store the form data in variables
        $username = $formdata['username'];
        $password = $formdata['password'];
        $cpassword = $formdata['cpassword'];

        // create a UserTable object and use it to retrieve 
        // the users
        $connection = DB::getConnection();
        $userTable = new UserTable($connection);
        $user = $userTable->getUserByUsername($username);

        // password  match, see if the username
        // has already been registered - if it is then throw
        // and exception
        if ($user != null) {
            $errors['username'] = "Username already registered";
        }
    }
    
    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }
    
    // else create a new User object, add it to the database 
    $user = new User(null, $username, $password, "user");
    $id = $userTable->insert($user);
    $user->setId($id);
    $_SESSION['user'] = $user;
    
    header('Location: index.php');
}
catch (Exception $ex) {
    $errorMessage = $ex->getMessage();
    require 'register_form.php';
}
?>
