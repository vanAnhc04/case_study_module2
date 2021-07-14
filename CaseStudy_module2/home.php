<?php
require_once "app/view/layout/header.php";
?>
<div class="container">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--                First slide-->
            <div class="carousel-item active">
                <img style="height: 400px" class="d-block w-100"
                     src="https://bizweb.dktcdn.net/100/371/178/themes/743610/assets/slider_1_image.png?1620809964641"
                     alt="">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img style="height: 400px" class="d-block w-100"
                     src="https://bizweb.dktcdn.net/100/371/178/themes/743610/assets/slider_2_image.png?1620809964641"
                     alt="">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img style="height: 400px" class="d-block w-100"
                     src="https://media.baodautu.vn/Images/haiyen/2016/10/11/12.jpg"
                     alt="">
            </div>
            <div class="carousel-item">
                <img style="height: 400px" class="d-block w-100"
                     src="https://tikibook.com/upload/news/012020/cua-hang-thuc-pham-sach-cleverfood-0.jpg"
                     alt="">
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <h2>Danh sách thực phẩm</h2>
    <table id="ThucPham" class="table table-hover table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>STT</th>
            <th>Mã thực phẩm</th>
            <th>Tên thực phẩm</th>
            <th>Loại thực phẩm</th>
            <th>Giá</th>
            <th>Ảnh minh họa</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($foods as $key => $food): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><a href="index.php?page=show-details&id=<?php echo $food['foodCode'] ?>">
                        <?php echo $food['foodCode'] ?>
                <td><?php echo $food['foodName'] ?></td>
                <td><?php echo $food['foodLine'] ?></td>
                <td><?php echo $food['buyPrice'] ?></td>
                <td>
                    <img style="width: 250px" src="img/<?php echo $food['img'] ?> " alt="">
                </td>
        <?php endforeach; ?>

        </tbody>
        <script>
            $(document).ready(function () {
                $('#ThucPham').DataTable({});
            });
        </script>
    </table>
</div>


<?php

require_once "app/view/layout/footer.php";

?>