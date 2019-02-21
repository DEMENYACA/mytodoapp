<form action="./add.php" method="post">
    <input type="text" name="task">
    <input type="submit">
</form>
<?php
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todoapp";
    
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
                <input type= "submit">
            </form>


<?php        } 
       
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    


?>