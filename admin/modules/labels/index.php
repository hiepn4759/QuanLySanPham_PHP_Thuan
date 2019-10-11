
<?php
	$open = "labels";
    require_once __DIR__. "/../../autoload/autoload.php";

  
    
    $labels = $db -> fetchAll("labels");
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>


        <!-- Page Heading  Noi dung-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách nhãn
                    <a href="add.php" class="btn btn-info">Thêm mới</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Quản trị</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Nhãn
                    </li>
                </ol>
                <div class="clearfix"></div>
                <!-- Thông báo -->
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
                <th>Tên danh mục</th>
                <th>Miêu tả</th>
                <th>Thời gian tạo</th>
                <th>Lựa chọn</th>
            </tr>
        </thead>
        <tbody>

            <?php $stt = 1; foreach ($labels as $item): ?>

                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['derscription'] ?></td>
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
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
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