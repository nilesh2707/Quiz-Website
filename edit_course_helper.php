<?php
function getData($user, $name)
{
    $user = $_GET['user'];
    $name = $_GET['name'];
    $file_name = "teacher" . ".json";
    $data = file_get_contents("$file_name");
    $json_data = json_decode($data, true);
    foreach ($json_data as &$arr) {
        foreach ($arr as $key => &$val) {
            if ($key == 'Username') {
                if ($val == $user) {
                    $cname = $_GET['cname'];
                    $update_name = $_GET['updatename'];
                    if (($key = array_search($cname, $arr['Course'])) !== false) {
                        $arr['Course'][$key] = $update_name;
                    }
                    // foreach($arr['Course'] as &$val1){
                    //     if($cname == $val1)
                    //     unset($val1);
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
    header("Location:./edit_course.php?msg={$msg}&name={$name}&user={$user}");
} else {

    $msg = "Error";
    header("Location:./edit_course.php?msg={$msg}");;
}
?>