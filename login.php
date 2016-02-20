<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 2/19/2016
 * Time: 11:48 AM
 */

require_once 'core/init.php';

if(Input::exists()){
    $validate = new Validation();
    $validation = $validate->check($_POST,array(
        'email' => array(
            'required' =>true
        ),
        'password' => array(
            'required' => true
        )
    ));
    if($validation->passed()){
        echo 'here';
    }else{
        $str = "";
        foreach ($validate->errors() as $error) {
            $str .= $error;
            $str .= '\n';
        }
        echo '<script type="text/javascript">alert("' . $str . '")</script>';
    }
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $loginCheck = DB::getInstance();
    $loginCheck->query('SELECT * FROM user_detail WHERE Email_address = ? AND Password = ?',array($email,$password));
    if($loginCheck->count()){
        echo 'exists';
    }else{
        echo 'not exists';
    }
}
?>
<form action="" method="post">
    <div>
        <h3 id="signin"><strong>Sign In</strong></h3>
    </div>

    <div>
        <label>Email</label><br>
        <input name="email"  placeholder="Enter your e-mail">
    </div>
    <div>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter password">
    </div>
    <input type="submit" value="Sign In">
</form>
