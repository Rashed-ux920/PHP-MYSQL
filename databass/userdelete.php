<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    // $email = $_POST["email"];

    try {
        
        // Include the database connection file
        include "dbh.inc.php";
        
        // Prepare the SQL query with placeholders for the values
        $query = "DELETE FROM USERS WHERE USERNAME = :username AND PWD = :pwd";
        $stmt = $pdo->prepare($query);
        
        // Execute the statement with the provided values
        $stmt->execute([
            'username' => $username,  // Ensure the variable names match
            'pwd' => $pwd,            // Ensure the variable names match
            // 'email' => $email         // Ensure the variable names match
        ]);
        
        // Reset the database connection and statement to null
        $pdo = null;
        $stmt = null;
        
        // Redirect the user to the main page
        header("Location: ../index.php");
        
        // Terminate the script to ensure the redirection occurs
        die();
    
        

    } catch (PDOException $e) {
        //throw $th;
        die("Query falied: " . $e->getmessage());
    }
}
else{
    header("Location: ../index.php");
}