<?php

require_once "app/view/layout/header.php";

?>

    <div style="border: 1px solid black; background-color: lightgreen " class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="color: tomato; text-align: center;">Thay đổi</h1>
            </div>
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Mã thực phẩm</label>
                        <input value="<?php echo $foods['foodCode'] ?>" type="text" class="form-control" name="name"
                               readonly>
                    </div>
                    <div class="form-group">
                        <label>Tên thực phẩm</label>
                        <input value="<?php echo $foods['foodName'] ?>" type="text" class="form-control" name="foodName"
                               placeholder="Nhập tên" required>
                    </div>
                    <div class=" form-group">
                        <label for="exampleFormControlTextarea1"> Loại thực phẩm</label>
                        <select name="foodLine" class="form-control ">
                            <option value="Rau Củ">Rau củ</option>
                            <option value="Trái Cây">Trái cây</option>
                            <option value="Thực phẩm tươi sống">Thực phẩm tươi sống</option>
                            <option value="Đồ nhập khẩu-Thực phẩm tươi sống">Đồ nhập khẩu-Thực phẩm tươi sống</option>
                            <option value="Đồ nhập khẩu-Rau Củ">Đồ nhập khẩu-Rau Củ</option>
                            <option value="Đồ nhập khẩu-Trái Cây">Đồ nhập khẩu-Trái Cây</option>
                        </select>
                    </div>
            </div>
            <div class="col-4 form-group">
                <label>Giá</label>
                <input value="<?php echo $foods['buyPrice'] ?>" type="number" class="form-control" name="buyPrice"
                       placeholder="Nhập giá" required>
            </div>
            <div class="col-4 form-group">
                <label>Ảnh minh họa</label>
                <input type="file" name="img" placeholder="Chọn ảnh" required>
            </div>
            <div class="col-4 form-group">
                <label>Ảnh ban dau</label>
                <img src="img/<?php echo $foods['img'] ?>" alt="" style="width:200px">
            </div>
            <button style="height: 50px" type="submit" class="btn btn-primary">Thay đổi</button>
            <a href="index.php?page=food-list" style="height: 50px" class="btn btn-secondary">Hủy
            </a>
        </div>
    </div>

<?php

require_once "app/view/layout/footer.php";

?>