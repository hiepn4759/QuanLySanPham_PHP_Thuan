
<?php
    $open = "labels";
    require_once __DIR__. "/../../autoload/autoload.php";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $data =
        [  
            "name" => postInput('name'),
            "derscription" => postInput("derscription")
        ];
        $error  = [];
        

        if(postInput('name') == '')
        {
            $error['name'] = "Nhập lại đầy đủ thông tin";
        }

        if(postInput('derscription') == ''){

            $error['derscription'] = "Nhập lại đầy đủ thông tin";
        }
        //  neu trống thi ko loi
        if(empty($error))
        {
            $isset = $db->fetchOne("labels", "name = '".$data['name']."' ");
            if(count($isset) > 0 ){
                 $_SESSION['error'] = "Danh mục đã tồn tại";

            }else{
                
                $id_insert = $db->insert("labels", $data);
                if($id_insert > 0){

                    $_SESSION['success'] = "Thêm mới nhãn thành công";
                    redirectAdmin("labels");
                }else{
                    //them moi that bai
                     $_SESSION['error'] = "Thêm mới nhãn thất bại";
                     redirectAdmin("labels");
                }
            }
           
        }
    }


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>


        <!-- Page Heading  Noi dung-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm mới nhãn
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Quản trị</a>
                    </li>
                    <li>
                        <i ></i>  <a href="index.html">Nhãn</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Thêm mới
                    </li>
                </ol>
                <div class="clearfix"></div>
                <!-- Thong bao -->
                <?php require_once __DIR__. "/../../../partials/notification.php"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <form  action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên nhãn</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" name="name">

                        <?php if(isset( $error['name'])): ?>

                            <p class="text-danger"><?php echo $error['name']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                   <div class="form-group">
                        <label for="exampleInputEmail1">Miêu tả</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Miêu tả nhãn" name="derscription">

                        <?php if(isset( $error['derscription'])): ?>

                            <p class="text-danger"><?php echo $error['name']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Thêm mới</button>

                </form>
            </div>
        </div>
        <!-- /.row -->


<?php require_once __DIR__. "/../../layouts/footer.php"; ?>