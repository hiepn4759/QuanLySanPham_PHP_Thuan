
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
?>
