<html>
<head>
    <title>Xác Thực Người Dùng</title>
    <meta charset="utf-8">
</head>
<body>
<h2>Thông tin đăng nhập không chính xác, vui lòng kiểm tra lại!</h2>
<div>
    <p><strong>Username:</strong> <?php echo $_POST['uname'];?></p>
    <p><strong>Mật khẩu:</strong> <?php echo $_POST['psw'];?></p>
	<p><strong>Thủ đô của Việt Nam là:</strong> <?php echo $_POST['QA'];?></p>  
    <?php
        if ($_POST['uname'] == 'admin' && $_POST['psw'] ==  1234 && $_POST['QA'] ==  'Hà Nội') {
            $adminURL = 'index.php';
            header('Location: '.$adminURL);
            exit();
        } 
  
  		if ($_POST['uname'] == 'test' && $_POST['psw'] ==  1234 && $_POST['QA'] ==  'Hà Nội') {
            $adminURL = 'index.php';
            header('Location: '.$adminURL);
            exit();
        } 
  
  		else {
            echo "<p>Vui lòng kiểm tra lại, với câu trả lời cần viết hoa tên địa danh: H* N**</p>";
        }
    ?>
</div>
</body>
</html>