<?php
    include_once './header.php';
?>
<h1 style="text-align: center">Register</h1>
        <form action="user_check.php" method="post">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter username" required="required" />
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email" required="required" />
            <label>Password</label>
            <input type="password" name="pass1" placeholder="Enter password" required="required" />
            <label>Repeat password</label>
            <input type="password" name="pass2" placeholder="Repeat password" required="required" />
            <input type="submit" name="submit" value="Register" />
            <input type="reset" name="reset" value="Cancel" />
        </form>
<?php
    include_once './footer.php';
?>