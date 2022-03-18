<?php
    $types= ['sedanas', 'kupė', 'universalas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="car_store.php" method="post">
        <div>
            <p>Įveskite gamintoją</p>
            <input type="text" name="maker">
        </div>
        <div>
            <p>Įveskite modelį</p>
            <input type="text" name="model">
        </div>
        <div>
            <p>Įveskite pagaminimo metus</p>
            <input type="text" name="release_year">
        </div>
        <div>
            <p>Įveskite spalvą</p>
            <input type="text" name="color">
        </div>
        <div>
            <p>Įveskite valst. numerį</p>
            <input type="text" name="car_no">
        </div>
        <div>
            <p>Įveskite kėbulo tipą</p>
            <select name="type">
            <?php 
                foreach ($types as $type) {
                    echo "<option value=\"$type\">$type</option>";
                }
            ?>
            </select>
        </div>
        <br>
        <input type="submit" name="submit" value="Įrašyti">
    </form>
</body>
</html>