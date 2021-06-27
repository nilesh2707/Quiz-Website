<?php
function getData($user, $name)
{
    $user = $_GET['user'];
    $name = $_GET['name'];
    $file_name = "teacher" . ".json";
    $data = file_get_contents("$file_name");
    $json_data = json_decode($data, true);
    foreach ($json_data as &$arr) {
        foreach ($arr as $key => $val) {
            if ($key == 'Username') {
                if ($val == $user) {
                    array_push($arr['Course'], $_GET['cname']);
                    // foreach($arr['Course'] as $val1){
                    //     echo $val1;
                    // }
                    $json = json_encode($json_data);
                    file_put_contents("$file_name",$json);
                    return true;
                }
            }
        }
    }
    return false;
}
$user = $_GET['user'];
$name = $_GET['name'];

if (getData($user, $name)) {
    $msg = "Successfull";
    header("Location:./add_course.php?msg={$msg}&name={$name}&user={$user}");
} else {

    $msg = "Error";
    header("Location:./add_course.php?msg={$msg}");;
}
?>