<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php include_once 'partials/head.php';?>

</head>
<body>

<!-- Header -->
<?php include_once 'partials/header.php';?>
<!-- /Header -->

<?php
if(isset($_GET['page']) && $_GET['page']){
    $filepath = dirname(__FILE__)."/pages/".trim($_GET['page']).".php";

    if(file_exists($filepath)){
        include_once "pages/".trim($_GET['page']).".php";
    }
}else{
    include_once 'pages/home.php';
}
?>

<!-- Footer -->
<?php include_once 'partials/footer.php';?>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
