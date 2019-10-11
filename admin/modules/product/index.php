
<?php
    $open = "product";
    require_once __DIR__. "/../../autoload/autoload.php";
    //$product = $db -> fetchAll("product");



    // xu ly phan trang
    if(isset($_GET['page'])){
        $p = $_GET['page'];
    }else {
        $p = 1;
    }


    $sql = "SELECT product. *, category.name as namecate FROM product
            LEFT JOIN category on category.id = product.category_id
            ";

    
    

    $product = $db -> fetchJone('product', $sql, $p, 2, true);
    
    if(isset($product['page'])){
        $sotrang = $product['page'];
        unset($product['page']);
    }

   


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>


        <!-- Page Heading  Noi dung-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách sản phẩm
                    <a href="add.php" class="btn btn-info">Thêm mới</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Bảng điều khiển</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Danh mục sản phẩm
                    </li>
                </ol>
                <div class="clearfix"></div>
                <!-- Thong bao -->
                <?php require_once __DIR__. "/../../../partials/notification.php"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục sản phẩm</th>
                <th>Nhãn sản phẩm</th>
                <th>Miêu tả</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Thời gian tạo</th>
                <th>Lựa chọn</th>
            </tr>
        </thead>
        <tbody>

            <?php $stt = 1; foreach ($product as $item): ?>

                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['namecate'] ?></td>
                    <td><?php echo $item['labels_id'] ?></td>
                    <td><?php echo $item['content'] ?></td>
                    <td><?php echo $item['price'] ?></td>
                    <td><?php echo $item['numproduct'] ?></td>
                    <td>
                        <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" width = "80px" height="80px">
                    </td>
                    <td><?php echo $item['created_at'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Sửa</a>
                        <a href="delete.php?id=<?php echo $item['id']?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Xóa</a>
                    </td>
                </tr>
            
            <?php $stt++; endforeach ?>
                
        </tbody>
    </table>
    <div class="bull-right">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

               

                
                
                <?php for($i = 1; $i <= $sotrang ; $i++): ?>
                    <?php 

                        if(isset($_GET['page'])){
                            $p = $_GET['page'];
                        }else {
                            $p = 1;
                        }

                    ?>
                    <li class="<?php echo($i == $p) ? 'active' : '' ?>">
                        
                        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>

                    </li>
                <?php endfor; ?>
                



                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
            </div>
        </div>
        <!-- /.row -->


<?php require_once __DIR__. "/../../layouts/footer.php"; ?>