<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 2/20/2016
 * Time: 6:52 PM
 */

require_once 'core/init.php';

?>
<form action="" method="post">
    <div>
        <h3 id="signup"><strong>Sign up</strong></h3>
    </div>

    <div>
        <label>Email</label><br>
        <input name="username"  placeholder="Enter your e-mail">
    </div>
    <div>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter password">
    </div>
    <div>
        <label>Re-Password</label><br>
        <input type="password" name="re-password" placeholder="Enter password">
    </div>

    <input id="next" type="submit" value="Register">
</form>