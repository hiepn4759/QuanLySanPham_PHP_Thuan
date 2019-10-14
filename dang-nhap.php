<?php 
	require_once __DIR__. "/autoload/autoload.php";
	// $conn = mysqli_connect("localhost", "root", "", "phpthuan");
	// mysqli_set_charset($conn, "utf8");
	//xuwr lý
	// $name = $password = '';
	// 
	
	$data = [
		'email' => postInput("email"),
		'password' =>postInput("password")
	];

	$error=[];

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if($data['email'] == '')
		{
			$error['email'] = "Tên không được để trống";
		}


		
		if($data['password'] == '')
		{
			$error['password'] = "Mật khẩu không được để trống";
		}


		// kiểm tra errot
		if(empty($error))
		{
			// // select
			// $sql = "select name, password from users"
			$is_check = $db->fetchOne("users"," email = '".$data['email']."'  AND password = '".$data['password']."' " );
			if($is_check != NULL){
				$_SESSION['name_user'] = $is_check['name'];
				$_SESSION['name_id'] = $is_check['id'];
				echo "<<script>alert('Đăng nhập thành công'); location.href='index.php'</script>";
			}
			else{
				// dang nhap that bai
				$_SESSION['error'] = "Đăng nhập thất bại";
			}
		}
	}
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>

<div class="col-md-9 bor">
    
    <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Đăng nhập </a> </h3>


		<?php if(isset($_SESSION['success'])) :?>

		    <div class="alert alert-success">
		        <?php echo $_SESSION['success']; unset($_SESSION['success']);  ?>
		    </div>

		<?php endif; ?>

		<?php if(isset($_SESSION['error'])) :?>

		    <div class="alert alert-danger">
		        <?php echo $_SESSION['error']; unset($_SESSION['error']);  ?>
		    </div>

		<?php endif; ?>


		<form action="" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-2 col-md-offset-1">Tài khoản</label>
					<div class="col-md-8">
						<input type="text" name="email" placeholder="abc@gmail.com" class="form-control" value="<?php echo $data['email'] ?>">
							<?php if(isset($error['email'])): ?>
								<p class="text-danger"><?php echo $error['email'] ?></p>
							<?php endif ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 col-md-offset-1">Mật khẩu</label>
					<div class="col-md-8">
						<input type="password" name="password" placeholder="Mật khẩu đăng nhập" class="form-control" value="<?php echo $data['password'] ?>">
						<?php if(isset($error['password'])): ?>
								<p class="text-danger"><?php echo $error['password'] ?></p>
						<?php endif ?>
					</div>
				</div>
				<button class="btn btn-success col-md-2 col-md-offset-5" type="submit">Đăng nhập</button>
		</form>
     <!-- Noi dung -->
    </section>
</div>





<?php require_once __DIR__. "/layouts/footer.php"; ?>