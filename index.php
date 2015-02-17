<?php
    if (isset($_POST['submit']))
    {
        require_once("classes/MySqlDatabaseClass.php");
        $query = "INSERT INTO `test` (`id`,
                                      `voornaam`)
                  VALUES             (Null,
                                      '".$_POST['voornaam']."')";
        //echo $query; exit();
        
        $database->fire_query($query);
        echo "Bedankt voor het invullen van je naam!";
        header("refresh:4;url=index.php");
    }
    else
    {
?>
<h3>Vul uw voornaam in!</h3>
<form action="index.php" method="post">
    <input type="text" name="voornaam" >
    <input type="submit" name="submit" value="verzenden" >
</form>
<?php
    }
?>