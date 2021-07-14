<?php

namespace App\controller;

use App\model\FoodModel;

class FoodController
{
    protected $foodModel;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
    }

    public function index()
    {
        $foods = $this->foodModel->getAll();
        include 'app/view/admin/list.php';

    }

    public function delete($foodCode)
    {
        if ($_REQUEST['foodCode']) {
            $this->foodModel->deleteFood($foodCode);
        }
        header("location:index.php?page=food-list");

    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $foodCode = $_REQUEST['foodCode'];
            $foods = $this->foodModel->getFoodById($foodCode);
            include_once "app/view/admin/edit.php";
        } else {
            $foodCode = $_REQUEST['foodCode'];
            $foodName = $_POST['foodName'];
            $foodLine = $_POST['foodLine'];
            $buyPrice = $_POST['buyPrice'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);

            $this->foodModel->edit($foodCode, $foodName, $foodLine, $buyPrice, $img);

            header("location:index.php?page=food-list");
        }
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "app/view/admin/add.php";
        } else {
            $foodName = $_POST['foodName'];
            $foodLine = $_POST['foodLine'];
            $buyPrice = $_POST['buyPrice'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);

            $this->foodModel->add($foodName, $foodLine, $buyPrice, $img);

            header("location:index.php?page=food-list");
        }
    }

    public function show()
    {
        $foodCode = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $showDetails = $this->foodModel->findById($foodCode);
            include "app/view/admin/fooddetails.php";
        } else {
            $foodCode = $_GET['id'];
            $foodName = $_POST['food'];
            $foodVendor = $_POST['vendor'];
            $foodDescription = $_POST['desc'];
            $quantityInStock = $_POST['amount'];

            $this->foodModel->addDetails($foodCode, $foodName, $foodVendor, $foodDescription, $quantityInStock);

            header("location:index.php");


        }
    }

    public function showRau_cu()
    {
        $foods = $this->foodModel->showRau_cus();
        include 'app/view/admin/list.php';
    }
    public function showTrai_cay()
    {
        $foods = $this->foodModel->showTrai_cays();
        include 'app/view/admin/list.php';
    }
    public function showTP_tuoi_song()
    {
        $foods = $this->foodModel->showTP_tuoi_songs();
        include 'app/view/admin/list.php';
    }
    public function showNK_tuoi_song()
    {
        $foods = $this->foodModel->showNK_tuoi_songs();
        include 'app/view/admin/list.php';
    }
    public function showNK_rau_cu()
    {
        $foods = $this->foodModel->showNK_rau_cus();
        include 'app/view/admin/list.php';
    }
    public function showNK_trai_cay()
    {
        $foods = $this->foodModel->showNK_trai_cays();
        include 'app/view/admin/list.php';
    }

}