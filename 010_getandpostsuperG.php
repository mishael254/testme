<?php

/**
 * 
 * We can pass data through urls and forms
 * using the $_GET and $_POST superglobals
 */
echo $_GET["name"];
echo $_GET["age"]
?>

<a href="<?php echo $_SERVER["PHP_SELF"]?>?name=john&age=25">Click</a>
<form action="<?php echo $_SERVER["PHP_SELF"]?>">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>

</form>