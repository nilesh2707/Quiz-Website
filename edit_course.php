<!DOCTYPE<html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    </head>

    <body>
        <?php
        $name = $_GET['name'];
        $user = $_GET['user'];
        ?>
        <div id="header">
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <div class="container-fluid" id="header">
                    <div class="navbar-header">

                        <a class="navbar-brand" href="#">
                            <p style="font-size:35px;text-transform: uppercase;margin:auto;padding:5px 5px">Quiz App</p>
                        </a>
                        <a class="navbar-brand" href="#">
                            <?php echo "<p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px;'>Welcome {$_GET['name']}</p>"; ?>
                        </a>
                        <?php echo "<a class='navbar-brand' href='./view_course.php?name={$name}&user={$user}'>
                            <p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px'>View Course</p>
                        </a>
                        <a class='navbar-brand' href='./add_course.php?name={$name}&user={$user}'>
                            <p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px'>Add Course</p>
                        </a>
                        <a class='navbar-brand' href='./edit_course.php?name={$name}&user={$user}'>
                            <p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px'>Edit Course</p>
                        </a>
                        <a class='navbar-brand' href='./delete_course.php?name={$name}&user={$user}'>
                            <p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px'>Delete Course</p>
                        </a>
                        <a class='navbar-brand' href='./teacherlogin.php'>
                            <p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px'>Logout</p>
                        </a>";
                        ?>
                    </div>
                </div>
            </nav>
        </div>

        <div class="outer-div">
             <?php
             if(isset($_GET['msg'])=="Successfull")
             {
                echo "<font color='green'>Course Updated!</font>";
             }
             else if(isset($_GET['msg'])=="Error")
             {
                echo "<font color='red'>Course Not Updated!</font>";
             }
            echo "<form method='GET' action='edit_course_helper.php' style='background-color:#fff;width:300px;align-items: center;padding:50px 200px 50px 70px;'>";
            echo "<label for='name'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Name</p></label><br>";
            echo "<input type='text' id='name' name='name' placeholder='Name'><br>";
            echo "<label for='user'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Username</p></label><br>";
            echo "<input type='text' id='user' name='user' placeholder='Username'><br>";
            echo "<label for='cname'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Course Name</p></label><br>";
            echo "<input type='text' id='cname' name='cname' placeholder='Course Name'><br>";
            echo "<label for='updatename'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Update Course Name</p></label><br>";
            echo "<input type='text' id='updatename' name='updatename' placeholder='Update Course Name'><br>";
            echo "<input type='submit' value='Submit' id='submit' class='btn btn-primary'>";                
            echo "</form>";
            ?>             
        </div>

        <div id="footer">
            <nav class="navbar navbar-inverse navbar-fixed-bottom ">
                <div class="container-fluid" id="footer">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <p style="font-size:20px;text-transform: uppercase;">&copy; Mohammad Umaid Ansari</p>
                        </a>
                    </div>
                </div>
            </nav>


        </div>
    </body>

    </html>