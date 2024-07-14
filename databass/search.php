<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # code...
        $searchuser = $_POST["searchuser"];

    
        try {
            
            // Include the database connection file
            include "dbh.inc.php";
            
            // Prepare the SQL query with placeholders for the values
            $query = "SELECT * FROM comments WHERE USERNAME = :searchuser";
            $stmt = $pdo->prepare($query);
            
            // Execute the statement with the provided values
            $stmt->execute([
                'searchuser' => $searchuser  // Ensure the variable names match
                // 'pwd' => $pwd,            // Ensure the variable names match
                // 'email' => $email         // Ensure the variable names match
            ]);
            //fetch the data from db
            $results = $stmt ->fetchAll(PDO::FETCH_ASSOC);
            
            // Reset the database connection and statement to null
            $pdo = null;
            $stmt = null;
            
            // Redirect the user to the main page
            // header("Location: ../index.php");
            
            // Terminate the script to ensure the redirection occurs
            // die();
        
            
    
        } catch (PDOException $e) {
            //throw $th;
            die("Query falied: " . $e->getmessage());
        }
    }
    else{
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH</title>
</head>
<body>
    <h1>searcg result:</h1>
    <?php
        if (empty($results)) {
            # code...
            echo "<div>";
            echo "<p>there  were no results</p>";
            echo "</div>";
        }
        else{
            // echo "<div>";
            // echo "<p>there  were no results</p>";
            // echo "</div>";
            // var_dump($results);
            foreach ($results as $key ) {
                # code...
                echo $key["USERNAME"];
                echo "          ";
                echo $key["CREATEDAT"];
                echo "<br>";
                echo "<br>";
                echo $key["COMMENT_TEXT"];
            }
        }
    ?>
</body>
</html>