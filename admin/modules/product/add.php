
<?php
    $open = "product";
    require_once __DIR__. "/../../autoload/autoload.php";
    /*
        
        lấy ra danh sách danh mục sản phẩm

     */
    
    $category = $db->fetchAll("category");
    $labels = $db->fetchAll("labels");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $data =
        [  
            "name" => postInput('name'),
            "category_id" => postInput("category_id"),
            "labels_id" => postInput("labels_id"),
            "price" => postInput("price"),
            "sale" => postInput("sale"),
            // hinh anh
            //"thunbar" => postInput("thunbar"),
            "content" => postInput("content"),
            "numproduct" => postInput("numproduct")
        ];

        // bắt lỗi
        
        $error  = [];
        if(postInput('name') == '')
        {
            $error['name'] = "Nhập lại đầy đủ tên danh mục";
        }

        if(postInput('category_id') == '')
        {
            $error['category_id'] = "Chọn lại tên danh mục";
        }

        if(postInput('labels_id') == '')
        {
            $error['labels_id'] = "Chọn lại tên nhãn";
        }

        if(postInput('price') == '')
        {
            $error['price'] = "Nhập lại giá";
        }

        if(postInput('content') == '')
        {
            $error['content'] = "Nhập lại nội dung";
        }
        if(postInput('numproduct') == '')
        {
            $error['numproduct'] = "Nhập lại số lượng";
        }


        // xu ly ve hinh anh
        if(!isset($_FILES['thunbar'])){
            $error['thunbar'] = "Chọn lại hình ảnh";
        }

        //  neu trống thi ko loi
        if(empty($error))
        {
            
            if(isset($_FILES['thunbar']))
            {
                $file_name = $_FILES['thunbar']['name'];
                $file_tmp = $_FILES['thunbar']['tmp_name'];
                $file_type = $_FILES['thunbar']['type'];
                $file_erro = $_FILES['thunbar']['error'];

                if($file_erro == 0)
                {
                    $part = ROOT ."product/";
                    $data['thunbar'] = $file_name; 
                }
            }

            $id_insert = $db->insert("product", $data);
            if($id_insert){
                move_uploaded_file($file_tmp, $part.$file_name);
                $_SESSION['success'] = "Thêm mới thành công";
                redirectAdmin("product");
            }else{
                $_SESSION['error'] = "Thêm mới thất bại";
                redirectAdmin("product");
            }
        }
    }


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>


        <!-- Page Heading  Noi dung-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm mới sản phẩm
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Bảng điều khiển</a>
                    </li>
                    <li>
                        <i ></i>  <a href="index.html">Sản Phẩm</a>
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
                <form  action="" method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Sản phẩm</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" name="name">
                        <?php if(isset( $error['name'])): ?>

                            <p class="text-danger"><?php echo $error['name']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Danh mục sản phẩm </label>

                        <select  id="" class="form-control col-md-8" name="category_id">
                            <option value="">Chọn danh mục sản phẩm</option>
                            <?php foreach ($category as $item): ?>
                                
                                
                                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>


                            <?php endforeach ?>
                        </select>
                        <?php if(isset( $error['category_id'])): ?>

                            <p class="text-danger"><?php echo $error['category_id']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhãn sản phẩm </label>

                        <select id="" class="form-control col-md-8" name="labels_id">
                            <option value="">Chọn nhãn sản phẩm</option>
                            <?php foreach ($labels as $item): ?>
                                
                                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>

                            <?php endforeach ?>
                        </select>

                        <?php if(isset( $error['labels_id'])): ?>

                            <p class="text-danger"><?php echo $error['labels_id']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá</label>

                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2.000.000" name="price">
                        <?php if(isset( $error['price'])): ?>

                            <p class="text-danger"><?php echo $error['price']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Giảm giá</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="10 %" name="sale" value="0">  
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình Ảnh</label>

                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="thunbar">
                        <?php if(isset( $error['thunbar'])): ?>

                            <p class="text-danger"><?php echo $error['thunbar']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung</label>

                       <textarea  class="form-control" name="content">
                           
                       </textarea>
                        <?php if(isset( $error['content'])): ?>

                            <p class="text-danger"><?php echo $error['content']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    

                    <div class="form-group">
                        <label for="exampleInputEmail1">Số lượng</label>

                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numproduct">
                        <?php if(isset( $error['numproduct'])): ?>

                            <p class="text-danger"><?php echo $error['numproduct']; ?></p>

                        <?php endif ?>
                        
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
        <!-- /.row -->


<?php require_once __DIR__. "/../../layouts/footer.php"; ?>