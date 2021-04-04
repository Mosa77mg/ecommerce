<?php  
//$do = ""
if(isset($_GET["do"])){
    $do = $_GET["do"];
}else{
    $do = "manage";
}
if($do == "manage"){
    echo "hello" . $do ."page";
    echo "<a href='?do=add'>add member</a>";
}elseif($do == "add"){
    echo "hello" . $do ."page";
}elseif($do == "insert"){
    echo "hello" . $do ."page";
}elseif($do == "edit"){
    echo "hello" . $do ."page";
}elseif($do == "update"){
    echo "hello" . $do ."page";
}elseif($do == "delet"){
    echo "hello" . $do ."page";
}elseif($do == "show"){
    echo "hello" . $do ."page";
}


?>