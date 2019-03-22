<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><span>Recipe find</span></title>
    <link rel="stylesheet" href="tablestyle.css">
</head>
<body>
    
<h1> Recipe find </h1>
<p>Quik recipes in a hurry! </p>

</body>
</html>

<form action="add.php" method="post">
    <input type="text" name="task">
    <input type="submit">
</form>
<?php
    
    include 
    $servername = "localhost";
    $username = "root";
    $password = "Stable19";
    $dbname = "recipe";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM mylist"); 
        $stmt->execute();
    
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        foreach ($result as $key => $value) {
?>
            <li> <?php echo $value["task"]; ?> </li>
            <form action="./delete.php" method="post">
                <input type="text" value= <?php echo $value["id"]; ?> name="id" hidden>
                <input type= "submit" value= "Completed" class="button">
            </form>


<?php        } 
       
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    


?>