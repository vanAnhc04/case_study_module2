<?php

require_once "app/view/layout/header.php";

?>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <img src="img/<?php echo $showDetails[0]['img'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 style="color: crimson ; font-size: 40px">CHI TIẾT </h4>
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered" cellspacing="0">
                            <tr>
                                <th>Tên thực phẩm</th>
                                <td><input type="text" name="food" value="<?php echo $showDetails[0]['foodName'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <th>Nhà cung cấp</th>
                                <td><input type="text" name="vendor"
                                           value="<?php echo $showDetails[0]['foodVendor'] ?>"></td>

                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td>
                                    <textarea cols="30" rows="15" type="text"
                                              name="desc"><?php echo $showDetails[0]['foodDescriptions'] ?></textarea>
                                </td>

                            </tr>
                            <tr>
                                <th>Số lượng</th>
                                <td><input type="number" name="amount"
                                           value="<?php echo $showDetails[0]['quantityInStock'] ?>"></td>

                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <button class="btn btn-success" type="submit">Cập nhật</button>
                                </td>

                            </tr>

                        </table>

                    </form>
                </div>

            </div>
        </div>
    </div>


<?php

require_once "app/view/layout/footer.php";

?>