<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = "teacher".".json";
    $username = $_POST['uname'];
    $password = $_POST['password'];
    function getData()
    {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        $file_name = "teacher".".json";
        if(file_exists("$file_name"))
        {
            $prev_data=file_get_contents("$file_name");
            $json_data=json_decode($prev_data,true);
            foreach($json_data as $arr)
            {
                foreach($arr as $key => $val)
                {
                    if($key == 'Username')
                    {
                        if($val==$username)
                        {
                            if($arr['Password'] == $password)
                            {
                                return $arr['Name'];
                            }
                            else
                            {
                                return null;
                            }
                        }
                    }
                }
            }
        }
        else
        return null;
    }
    $msg = "";
    $name = getData();
    if (!is_null($username) && !is_null($name)) {
        $msg = "Successfull";
        header("Location:./teacherdashboard.php?username={$username}&name={$name}");
    } else {
        $msg = "Error";
        header("Location:./teacherlogin.php?msg={$msg}");
    }
}
