<?php 
	require_once __DIR__. "/autoload/autoload.php";

	$sqlHomecate = "SELECT  name, id FROM  category WHERE home = 1 ORDER BY update_at";


	//lay được các danh mục được actice
	$CategoryHome = $db->fetchsql($sqlHomecate);

	$data= [];
	foreach ($CategoryHome as $item)
	{
		$cateId = intval($item['id']);

		$sql = "SELECT * FROM product WHERE category_id = $cateId ";
		//lay tất cả sản phẩm
		$ProductHome = $db->fetchsql($sql);
		
		// cho vao mang 2 chieu
		$data[$item['name']] = $ProductHome;
	}
	
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>



<div class="col-md-9 bor">
    <section id="slide" class="text-center" >
        <img src="<?php echo base_url()?>public/frontend/images/slide/5.jpg" class="img-thumbnail" width="100%">
    </section>
    <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Sản Phẩm </a> </h3>
        <?php foreach ($data as $key => $value): ?>
        	<div class="col-md-12">
        	<h3 class="title-main"><a href=""><?php echo $key ?></a></h3> 
			<div class="showitem">
				<?php foreach ($value as $item): ?>
					<div class="col-md-3 item-product bor">
		                <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
		                	<img src="<?php echo uploads()?>/product/<?php echo $item['thunbar'] ?>" class="" width="100%" height="180">
		                </a>
		                <div class="info-item">
		                    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>""><?php echo $item['name'] ?></a>
		                    <p><strike class="sale"><?php echo formatPrice($item['price']) ?></strike> <b class="price"><?php echo formatPricesale($item['price'], $item['sale']) ?></b></p>
		                </div>
		                <div class="hidenitem">
		                    <p><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>""><i class="fa fa-search"></i></a></p>
		                    <p><a href=""><i class="fa fa-heart"></i></a></p>
		                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
		                </div>
	            	</div>  
				<?php endforeach ?>
	              
        	</div>
        	</div>

        <?php endforeach ?>

        
        
    </section>
</div>





<?php require_once __DIR__. "/layouts/footer.php"; ?>