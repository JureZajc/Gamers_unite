<?php
    include_once './header.php';
?>
<p style="text-align: center">If you would like to change password, please enter new one bellow.</p>


<form action="./profile.php" method="post"> 
    <label> Enter old password </label>
    <input type="password" name ="old_pass" placeholder="Enter old password" required="required"/>
    <label>Enter new password</label>
    <input type="password" name="pass3" placeholder="Enter new password" required="required" />
    <label>Repeat new password</label>
    <input type="password" name="pass4" placeholder="Repeat new password" required="required" />
    <input type="submit" value="Submit" />
</form>

<p style="text-align: center"> If you would like to add more personal information, please add them in the form below. </p>
<form action="./add_name.php" method="post">
    <label> Enter your name </label>
    <input type="text" name="name" placeholder="Enter your name"/>
    <label> Enter your surname </label>
    <input type="text" name="surname" placeholder="Enter your surname"/>
    <input type="submit" value="submit"/>

</form>







<?php
    include_once './footer.php';
?>