<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Luật giao thông đường bộ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
<div class="row main-login">
    <div class="infor-team col-md-7 col-centered login">
        <h3>Tư vấn luật giao thông đường bộ dành cho người đi xe máy</h3>
        <p><em>Nhóm:Nguyễn Tuấn Anh(MSSV: 752355)- Nguyễn Anh Tuấn (MSSV: 183855)<br> Bùi Sỹ Huấn(MSSV: 1296255)</em></p>
    </div>
    <div class="col-md-5 col-centered login">
            <br><br>
        <form class="form-inline" action="" method="post">
            <div class="form-group col-md-10">
                <label class="sr-only" for="exampleInputEmail3">Tài khoản</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Tài khoản" name="username">
            </div>
            <div class="form-group col-md-10">
                <label class="sr-only" for="exampleInputPassword3">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Mật khẩu" name="password">
            </div>
            
            <div class="checkbox col-md-10">
                <button type="submit" class="btn btn-default" name="btnsub">Đăng nhập</button>
            </div>
        </form>
        <?php
			if(isset($_POST['btnsub']))
			{
				$user=$_POST['username'];
				$pass=$_POST['password'];
				if($user=='admin@gmail.com' && $pass=='123')
				{
					header("location: main.php");
				}
			}
		?>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>