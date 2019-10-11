<?php 
	$open = "category";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));


    $EditCategory = $db ->fetchID("category", $id);

    if(empty($EditCategory))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("category");
    }

    $home = $EditCategory['home'] == 0 ? 1 : 0;

    $update = $db->update("category", array("home" => $home), array("id"=>$id));

    if($update > 0){
        $_SESSION['success'] = "Thay đổi thành công";
        redirectAdmin("category");
    }else{
        //them moi that bai
         $_SESSION['error'] = "Cập nhật danh sách sản phẩm thất bại";
         redirectAdmin("category");
    }
?>