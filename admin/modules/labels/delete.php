
<?php
    $open = "labels";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $DeleteLabels = $db ->fetchID("labels", $id);

    if(empty($DeleteLabels))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("labels");
    }



    /*
        kiểm tra xem danh mục đã có sẩn phẩm chưa
     */


    $is_product = $db->fetchOne("product", " labels_id = $id ");
    debug($is_product);
    if($is_product == NULL)
    {
         $num = $db ->delete("labels", $id);
        if($num > 0)
        {
            $_SESSION['success'] = "Xóa thành công";
            redirectAdmin("labels");
        }
        else
        {
            $_SESSION['error'] = "Xóa thất bại";
            redirectAdmin("labels");
        }   
    }else {
            $_SESSION['error'] = "Danh mục có sản phẩm bạn không thể xóa";
            redirectAdmin("labels");
    }
?>
