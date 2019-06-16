<?php
session_status();
require_once ('db.php');
$database = new Database();
//echo "<pre>";
//print_r($database);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h2>Giỏ hàng</h2>
    <p>Chi tiết giỏ hàng</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa khỏi giỏ hàng</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>camera</td>
            <td></td>
            <td>100000</td>
            <td>2</td>
            <td>200000</td>
            <td><a href="#">Xóa</a></td>
        </tr>

        </tbody>
    </table>
    <div>Tổng hóa đơn thanh toán: <strong>20000</strong></div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">

        <?php
            $sql = 'SELECT * FROM products';
            $products = $database->runQuery($sql);
//            echo '<pre>';
//            print_r($products);
        ?>

        <?php
            if (!empty($products)): ?>
            <?php foreach ($products as $product) :?>
        <div class="col-sm-6">

            <form name="product<?php echo $product['id'];?>" action="" method="post">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" alt="" style="height: 315px;display: block" src="images/<?php echo $product['product_image'];?>">
                    <div class="card-body">
                        <p class="card-text" style="font-weight:bold ">Product: <?php echo $product['product_name'];?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <div class="form-inline">
                                    <input type="text" class="form-control" name="quantity" value="1">
                                    <label style="margin-left: 10px"><button type="button" class="btn btn-sm btn-outline-secondary">Thêm vào giỏ hàng</button></label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php endforeach;?>
        <?php endif;?>


    </div>

</div>




</body>
</html>
