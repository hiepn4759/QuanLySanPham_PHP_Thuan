
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

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $data =
        [  
            "name" => postInput('name'),
            "slug" => to_slug(postInput("name"))
        ];
        $error  = [];
        

        if(postInput('name') == '')
        {
            $error['name'] = "Nhập lại đầy đủ tên danh mục";
        }

        //  neu trống thi ko loi
        if(empty($error))
        {
            $id_update = $db->update("category", $data, array("id" => $id));
            if($id_update > 0){

                $_SESSION['success'] = "Dữ liệu không thay đổi";
                redirectAdmin("category");
            }else{
                //them moi that bai
                 $_SESSION['error'] = "Cập nhật danh sách sản phẩm thất bại";
                 redirectAdmin("category");
            }
        }
    }


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>


        <!-- Page Heading  Noi dung-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm mới danh mục
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li>
                        <i ></i>  <a href="index.html">Danh mục</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Thêm mới
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <form  action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" name="name" value="<?php echo $EditCategory['name'] ?>">
                        <?php if(isset( $error['name'])): ?>

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