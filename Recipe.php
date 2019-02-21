<?php
$servername = "localhost";
$username = "root";
$password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=Employee;", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
    // $sql = "CREATE DATABASE Employee";
    // $sql = "CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP
    //     )";
    // use exec() because no results are returned
    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
     
    // $last_id = $conn->lastInsertId();
    // echo $last_id;
    // $conn->beginTransaction();
    // our SQL statements
    // $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    // VALUES ('John', 'Doe', 'john@example.com')");
    // $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    // VALUES ('Mary', 'Moe', 'mary@example.com')");
    // $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    // VALUES ('Julie', 'Dooley', 'julie@example.com')");
    // $last_id = $conn->lastInsertId();
    // echo $last_id;
    
    // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");

    
    // set parameters and execute
    // $firstname = "DEMENYACA";
    // $lastname = "MORTON";
    // $email = "DEMENYACA@GMAIL.COM";
    // // $stmt->bindParam("sss", $firstname, $lastname, $email);
    // $stmt->execute([$firstname, $lastname, $email]);
    
    // $firstname = "SUTHUN";
    // $lastname = "SNO";
    // $email = "DEMI@SUTHUN.COM";
    // $stmt->execute();
    
    // $firstname = "DEMENYACA";
    // $lastname = "MORTON";
    // $email = "DEMENAYCA@ME.COM";
    // $stmt->execute();
    
    // echo "New records created successfully";
    
//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=Employee;", $username, $password);
//         // set the PDO error mode to exception
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $stmt = $conn->prepare("SELECT * FROM myguests"); 
//         $stmt->execute();
//         $result=$stmt->fetchAll();
//         echo "<pre>";
//         var_dump($result);
//         echo "</pre>";
//     }

// catch(PDOException $e)
    // {
    // echo "Connection failed: " . $e->getMessage();
    try {
        $conn = new PDO("mysql:host=$servername;dbname=Employee", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // sql to delete a record
        // $sql = "DELETE FROM MyGuests WHERE id=3";
        $sql = "UPDATE MyGuests SET lastname='Morton' WHERE id=4";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
        // use exec() because no results are returned
        // $conn->exec($sql);
        // echo "Record deleted successfully";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;



 ?>