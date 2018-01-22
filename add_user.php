<?php
    include_once './header.php';
?>
<h1 style="text-align: center">Registracija</h1>
        <form action="user_check.php" method="post">
            <label>Uporabniško ime</label>
            <input type="text" name="username" placeholder="Vnesi uporabniško ime" required="required" />
            <label>Ime</label>
            <input type="text" name="ime" placeholder="Vnesi ime" required="required" />
            <label>Priimek</label>
            <input type="text" name="priimek" placeholder="Vnesi priimek" required="required" />
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email" required="required" />
            <label>Geslo</label>
            <input type="password" name="pass1" placeholder="Vnesi geslo" required="required" />
            <label>Ponovi geslo</label>
            <input type="password" name="pass2" placeholder="Ponovno vnesi geslo" required="required" />
            <input type="submit" name="submit" value="Registracija" />
            <input type="reset" name="reset" value="Prekliči" />
        </form>
<?php
    include_once './footer.php';
?>