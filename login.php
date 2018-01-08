<?php
    include_once './header.php';
?>


<h1 style="text-align: center">Login</h1>

<form action="login_check.php" method="post">
    <label>E-mail</label>
    <input type="email" name="email" placeholder="Enter your email" 
           required="required" />
    <label>Password</label>
    <input type="password" name="pass" placeholder="Enter your password" 
           required="required" />
    <input type="submit" name="submit" value="Log-in" />
</form>



<?php
    include_once './footer.php';
?>