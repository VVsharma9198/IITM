<html>
    <head>
        <title>PHP Form</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script>
            function deletepage(){
                location.replace("delete.php")
            }
            function addpage(){
                location.replace("add.php");
            }
            function updatepage(){
                location.replace("update.php");
            }
        </script>
    </head>
    <body style="background-image: url(background2.jpg);">
        <form name="PHP Registration form" method="" action="">
            <div class="outer_box">
            <div>
                <h3>PHP Form</h3>
            </div>
            <div class="container">
                <button type="button" value="Add" onclick="addpage()">Add</button>
                <button type="button" value="Edit" onclick="updatepage()">Edit</button>
                <button type="button" value="Delete" onclick="deletepage()">Delete</button>
            </div>
            </div>
        </form>
    </body>
</html>