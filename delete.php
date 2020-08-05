<html>
    <head>
        <title>Delete Details</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script>
            function backpage(){
                location.replace("form.php")
            }            
        </script>
    </head>
    <body style="background-image: url(background2.jpg);">
            <div>
            <form method = "post" action = "<?php $_PHP_SELF ?>">
                <div>
                    <label>E-mail:</label>
                    <input type="email" required name="email" placeholder="E-mail" class=""><br/>
                    <input type="submit" name="delete" value="Delete">
                    <input type="submit" value="Back" name="Back" onclick="backpage()">
                </div>
            </form>
            </div>
        <?php
$servername = "localhost";
$username = "sharma";
$password = "sharma@9198";
$dbname = "sharma";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["delete"])){    
    $email = $_POST['email'];
$query = "DELETE FROM form WHERE email='$email'";
if (mysqli_query($conn, $query)) {
    echo "Deleted successfully";
} else {
    echo "Error: ". mysqli_error($query);
}
    }

    mysqli_close($conn);
?>
    </body>
</html>