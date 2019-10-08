
<?php
    require_once __DIR__. "/../../autoload/autoload.php";

  
    

?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>


        <!-- Page Heading  Noi dung-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách danh mục
                    <a href="add.php" class="btn btn-info">Thêm mới</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Danh mục
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Page</th>
                <th>Visits</th>
                <th>% New Visits</th>
                <th>Revenue</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>/index.html</td>
                <td>1265</td>
                <td>32.3%</td>
                <td>$321.33</td>
            </tr>
            <tr>
                <td>/about.html</td>
                <td>261</td>
                <td>33.3%</td>
                <td>$234.12</td>
            </tr>
            <tr>
                <td>/sales.html</td>
                <td>665</td>
                <td>21.3%</td>
                <td>$16.34</td>
            </tr>
            <tr>
                <td>/blog.html</td>
                <td>9516</td>
                <td>89.3%</td>
                <td>$1644.43</td>
            </tr>
            <tr>
                <td>/404.html</td>
                <td>23</td>
                <td>34.3%</td>
                <td>$23.52</td>
            </tr>
            <tr>
                <td>/services.html</td>
                <td>421</td>
                <td>60.3%</td>
                <td>$724.32</td>
            </tr>
            <tr>
                <td>/blog/post.html</td>
                <td>1233</td>
                <td>93.2%</td>
                <td>$126.34</td>
            </tr>
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