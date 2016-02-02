<?php
function __autoload($class){
    include ("model/$class.php");
}
$obj = new JedDB;
//Insert Data
if(isset($_REQUEST['insert'])){
    extract($_REQUEST);
    if($obj->insertData($name,$address,$age,$contact,"People")){
        echo "Saved";
        echo ('<meta http-equiv="refresh" content="1;url=http:/JedCrudv3/view/insert.php">');
    }
}
//Update Data
if(isset($_REQUEST['update'])){
    extract($_REQUEST);
    if($obj->update($id,$name,$address,$age,$contact,"People")){
       echo "Updated Successfully";
    }
}
    extract($obj->getById($_REQUEST['id'],"People"));
//Delete Data
if(isset($_REQUEST['del_id'])){
    if($obj->deleteData($_REQUEST['del_id'],"People")){
        echo ('<meta http-equiv="refresh" content="0;url=http:/JedCrudv3/view/show.php">');
    }
}
?>