<?php

if (isset($_GET['id'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cars";
    $id = $_GET['id'];
    $types= ['sedanas', 'kupė', 'universalas'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM cars WHERE id= $id");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    $car = $result[0];
    ?>
    <form action="car_update.php" method="post">
        <div>
            <p>Įveskite gamintoją</p>
            <input type="text" name="maker" value="<?php echo $car['maker'];?>">
        </div>
        <div>
            <p>Įveskite modelį</p>
            <input type="text" name="model" value="<?php echo $car['model'];?>">
        </div>
        <div>
            <p>Įveskite pagaminimo metus</p>
            <input type="text" name="release_year" value="<?php echo $car['release_year'];?>">
        </div>
        <div>
            <p>Įveskite spalvą</p>
            <input type="text" name="color" value="<?php echo $car['color'];?>">
        </div>
        <div>
            <p>Įveskite valst. numerį</p>
            <input type="text" name="car_no" value="<?php echo $car['car_no'];?>">
        </div>
        <div>
            <p>Įveskite kėbulo tipą</p>
            <select name="type">
            <?php 
                foreach ($types as $type) {
                    if ($type === $car['type']){
                        echo "<option value=\"$type\" selected>$type</option>";
                    } else {
                        echo "<option value=\"$type\">$type</option>";
                    }
                } 
            ?>
            </select>
        </div>
        <br>
        <input type="hidden" name="id" value="<?php echo $car['id'];?>">
        <input type="submit" name="submit" value="Įrašyti">
    </form>
    <?php
} else {
    header('location: index.php');
}