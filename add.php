<html>
    <head>
        <title>Add Details</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script>
            function backpage(){
                location.replace("form.php")
            }            
        </script>
    </head>
    <body style="background-image: url(background2.jpg);">
        <div>
            <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Name:</label>
                    <input type="text" required name="name" placeholder="Name" class=""><br/>
                    <label>DOB:</label>
                    <input type="date" required name="dob" placeholder="DOB" class=""><br/>
                    <label>E-mail:</label>
                    <input type="email" required name="email" placeholder="E-mail" class=""><br/>
                    <label>Address:</label>
                    <input type="text" required name="address" placeholder="Address" class=""><br/>
                    <label>Photo:</label>
                    <input type="file" required name="photo" class=""><br/>
                    <label>Course:</label>
                    <input type="text" required name="course" placeholder="Course" class=""><br/>
                    <input type="submit" name="submit" value="Submit">
                    <input type="submit" value="Back" name="Back" onclick="backpage()">
                </div>
            </form>
            </div>
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

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];       
    $email = $_POST['email'];
    $address = $_POST['address'];
    $photo = $_FILES['photo']['tmp_name'];
    $iname = $_FILES['photo']['name'];
    $course = $_POST['course'];

    $photo = file_get_contents($photo);
    $photo = base64_encode($photo);
$query = "INSERT INTO form (name,date,email,address,photo,course,iname) VALUES('$name','$dob','$email','$address','$photo','$course','$iname')";

if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }

    mysqli_close($conn);
?>
    </body>
</html>