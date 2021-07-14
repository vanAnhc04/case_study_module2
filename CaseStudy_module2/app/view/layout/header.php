<!doctype html>
<html lang="en">
<head>
    <title>Shop Thực Phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<style>
    .showList {
        color: black !important;
        width: 250px !important;
        left: 20px;
        border-top-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }


    .show {
        /*background-color: seagreen !important;*/
        width: 250px !important;
        height: 70px !important;
        border-radius: 50%;
        text-align: center;
    }

    .nav, .nav ul {
        margin: 0px;
        padding: 0px;
        list-style: none outside none;
        height: 30px;


    }

    .nav li {
        float: left;
        width: 150px;
        position: relative;
        height: 50px;
        background: #cc101c;
        display: block;
        box-shadow: 10px 0px 10px 0px;
        margin-left: 2px;

    }

    .nav a {
        text-decoration: none;
        height: 50px;
        display: block;
        text-align: center;
        color: white;
        padding-top: 10px;
    }

    .sub {
        left: -9999px;
        position: absolute;
        top: -9999px;
        z-index: 2;


    }

    .nav li:hover .sub {
        visibility: visible;


    }

    .nav {
        font-family: Calibri;
        font-size: 20px;
        height: 50px;
        font-weight: bold;
        margin: 40px auto;
        text-shadow: 0 -1px 3px #ffcc00;
        border-radius: 4px;


    }

    .nav li:first-child {
        border-left: 0 none;
        margin-left: 5px;


    }

    .nav li a {
        color: White;
        display: block;
        line-height: 24px;
        text-decoration: none;
    }

    @keyframes ss {
        0% {
            transform: scale(1);
        }
        30% {
            transform: scale(1.3);
        }
        100% {
            transform: scale(1);
        }
    }

    .nav li > a:hover {
        animation: ss 0.7s linear infinite forwards;


    }

    .nav li:hover > a {
        z-index: 4;

    }

    .nav li:hover .sub {
        left: 0;
        top: 50px;
        width: 150px;
    }

    .nav ul li {
        background: none repeat scroll 0 0 #ff6565;
        box-shadow: 5px 5px 5px rgb(0, 0, 0);
        opacity: 0.3;
        width: 100%;

    }

    .nav li:hover ul li {
        animation: ss1 0.3s linear 1 forwards;

    }

    @keyframes ss1 {
        0% {
            margin-left: 300px;
            top: 900px;
            transform: rotate(90deg);
        }
        100% {

            margin-left: 0px;
            top: 0px;
            transform: rotate(360deg);
            opacity: 1;

        }
    }

    .nav li:hover ul li:nth-child(3) {
        animation-delay: 0s;
    }

    .nav li:hover ul li:nth-child(2) {
        animation-delay: 0.1s;
    }


    .nav li:hover ul li:nth-child(1) {
        animation-delay: 0.2s;
    }
</style>

<div class="container">
    <div class="row">
        <ul class="nav">

            <a class="navbar-brand" href="index.php?page=food-list">
                <img
                        style="width: 160px;position: absolute;top: 20px;left: 60px"
                        src="urbanui-login-template-free-2-38baaa875b8e/assets/images/logo.jpeg"
                        class="header_logo header-logo"
                        alt="">
            </a>
            <li class="showList" style="color: black"><a href="#">Đồ nội địa</a>
                <ul class="sub">
                    <li class="show"><a href="index.php?page=rau_cu">Rau củ</a></li>
                    <li class="show"><a href="index.php?page=trai_cay">Trái Cây</a></li>
                    <li class="show"><a href="index.php?page=thit">Thực phẩm tươi sống</a></li>
                </ul>
            </li>
            &emsp;
            &emsp;
            &emsp;
            &emsp;
            &emsp;
            &emsp;
            &emsp;
            <li class="showList"><a href="#">Đồ nhập khẩu</a>
                <ul class="sub">
                    <li class="show"><a href="index.php?page=NK1">Đồ nhập khẩu-Thực phẩm tươi sống</a></li>
                    <li class="show"><a href="index.php?page=NK2">Đồ nhập khẩu-Rau Củ</a></li>
                    <li class="show"><a href="index.php?page=NK3">Đồ nhập khẩu-Trái Cây</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="btn-group" style="position: relative;left: 1000px">
            <img src="https://cannhacongnghe.com/wp-content/uploads/2021/06/t%C6%B0-v%E1%BA%A5n.png"
                 style="height: 40px"><span style="color: black;text-align: center!important;">Tư vấn mua hàng<br>tel:0387252044</span>
    </div>
</div>


<script>$(document).ready(function () {
        $('.nav-button').click(function () {
            $('body').toggleClass('nav-open');
        });
    });
</script>