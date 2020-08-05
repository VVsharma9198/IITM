<html>
    <head>
        <title>Update Details</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="background-image: url(background2.jpg);">
        <form action="" method="POST" >
        <table border="1" cellspacing="15">
            <tr>
                <td>E-mail:</td> 
                <td><input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Fetch" name="fetch"></td>
            </tr>
        </table>
        </form>
        <?php
            $servername = "localhost";
            $username = "sharma";
            $password = "sharma@9198";
            $dbname = "sharma";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(isset($_POST['fetch'])){
                $email = $_POST['email'];
                $sql = "SELECT * FROM form WHERE email = '$email'";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result))
                    {
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table border="1" cellspacing="15">
                <tr>
                    <td>Name:</td> 
                    <td><input type="text" name="updatename" value="<?php echo $row['name']; ?>"></td>
                </tr>
                <tr>
                    <td>DOB:</td> 
                    <td><input type="date" name="updatedob" value="<?php echo $row['date']; ?>"></td>
                </tr>
                <tr>
                <td>E-mail:</td> 
                <td><input type="email" name="updateemail" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Address:</td> 
                    <td><input type="address" name="updateaddress" value="<?php echo $row['address']; ?>"></td>
                </tr>
                
                <tr>
                    <td><img src="<?php echo $row['photo']; ?>" width="200" height="200" /></td>
                    <td><?php echo $row['iname']; ?></td>
                <tr>
                <tr>
                    <td>Photo:</td>
                    <td><input type="file" name="updatephoto" value="<?php echo $row['photo']['tmp_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Course:</td> 
                    <td><input type="text" name="updatecourse" value="<?php echo $row['Course']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Update" name="update"></td>
                </tr>
            </table>
        </form>

        
        <?php
        
        	}}
    	?>

<?php
    
        	if(isset($_POST['update'])){	
                $name = $_POST['updatename'];
                $dob = $_POST['updatedob'];
                $email = $_POST['updateemail'];
                $address = $_POST['updateaddress'];
                $photo = $_POST['updatephoto'];
                $course = $_POST['updatecourse'];
	
                $query="UPDATE form SET name='$name', date='$dob', address='$address', Course='$course' where email='$email'";
            	if (mysqli_query($conn, $query)) {
                   echo "New";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>


    </body>
</html>