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
        $cname = $_GET['cname'];
        ?>
        <div id="header">
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <div class="container-fluid" id="header">
                    <div class="navbar-header">

                        <a class="navbar-brand" href="#">
                            <p style="font-size:35px;text-transform: uppercase;margin:auto;padding:5px 5px">Quiz App</p>
                        </a>
                        <a class="navbar-brand" href="#">
                            <?php $name = $_GET['name'];
                                    $user = $_GET['user'];
                         echo "<p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px;'>Welcome {$_GET['name']}</p>"; ?>
                        </a>
                        <?php
                        $name = $_GET['name'];
                        $user = $_GET['user'];
                         echo "<a class='navbar-brand' href='./view_course.php?name={$name}&user={$user}'>
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
                echo "<font color='green'>Quiz Added!</font>";
             }
             else if(isset($_GET['msg'])=="Error")
             {
                echo "<font color='red'>Quiz Not Added!</font>";
             }
            echo "<form method='GET' action='add_quiz_helper.php' style='background-color:#fff;width:300px;align-items: center;padding:50px 200px 50px 70px;'>";
            echo "<label for='question1'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Question 1</p></label><br>";
            echo "<input type='text' id='question1' name='question1' placeholder='Question 1'><br>";
            echo "<input type='text' id='1ans1' name='ans1' placeholder='Option1'><br>";
            echo "<input type='text' id='1ans2' name='ans2' placeholder='Option2'><br>";
            echo "<input type='text' id='1ans3' name='ans3' placeholder='Option3'><br>";
            echo "<input type='text' id='1ans4' name='ans4' placeholder='Option4'><br>";
            echo "<input type='text' id='cans1' name='ans' placeholder='Correct Answer'><br>";

            echo "<label for='question2'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Question 2</p></label><br>";
            echo "<input type='text' id='question2' name='question2' placeholder='Question 2'><br>";
            echo "<input type='text' id='2ans1' name='ans1' placeholder='Option1'><br>";
            echo "<input type='text' id='2ans2' name='ans2' placeholder='Option2'><br>";
            echo "<input type='text' id='2ans3' name='ans3' placeholder='Option3'><br>";
            echo "<input type='text' id='2ans4' name='ans4' placeholder='Option4'><br>";
            echo "<input type='text' id='cans2' name='ans' placeholder='Correct Answer'><br>";

            echo "<label for='question3'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Question 3</p></label><br>";
            echo "<input type='text' id='question3' name='question3' placeholder='Question 3'><br>";
            echo "<input type='text' id='2ans1' name='ans1' placeholder='Option1'><br>";
            echo "<input type='text' id='2ans2' name='ans2' placeholder='Option2'><br>";
            echo "<input type='text' id='2ans3' name='ans3' placeholder='Option3'><br>";
            echo "<input type='text' id='2ans4' name='ans4' placeholder='Option4'><br>";
            echo "<input type='text' id='cans3' name='ans' placeholder='Correct Answer'><br>";

            //echo "<label for='user'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Name</p></label><br>";
            echo "<input type='text' id='name' name='name' placeholder='Name' value='{$name}' style='display:none'><br>";

            //echo "<label for='user'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Username</p></label><br>";
            echo "<input type='text' id='user' name='user' placeholder='Username' value='{$user}' style='display:none'><br>";
            //echo "<label for='cname'><p style='text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;'>Course Name</p></label><br>";
            echo "<input type='text' id='cname' name='cname' placeholder='Course Name' value='{$cname}' style='display:none'><br>";
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