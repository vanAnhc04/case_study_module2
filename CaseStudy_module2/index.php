<?php

use App\controller\FoodController;


require_once __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$foodController = new FoodController();


switch ($page) {
    case 'food-list':
        $foodController->index();
        break;
    case 'delete':
        $foodCode = $_REQUEST['foodCode'];
        $foodController->delete($foodCode);
        break;
    case 'edit':
        $foodController->edit();
        break;
    case 'add':
        $foodController->add();
        break;
    case 'show-details':
        $foodController->show();
        break;
    case 'rau_cu':
        $foodController->showRau_cu();
        break;
    case 'trai_cay':
        $foodController->showTrai_cay();
        break;
    case 'thit':
        $foodController->showTP_tuoi_song();
        break;
    case 'NK1':
        $foodController->showNK_tuoi_song();
        break;
    case 'NK2':
        $foodController->showNK_rau_cu();
        break;
    case 'NK3':
        $foodController->showNK_trai_cay();
        break;
    default:
        $foodController->index();
}

