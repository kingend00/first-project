<?php 
include('Controller/Controller.php');
$controller = new Controller();
//$controller->test();
//$controller->Pagination(); 
//$controller->Admin();
$controller->DeleteExchange();
//$discount = $controller->Discount(10);
$controller->EditDrink();
$controller->EditFood();
$controller->DataForEdit();
$controller->EditAccountEmp();
$controller->EditAccountCus();
$controller->InsertCart();
$controller->BuyProduct();
$controller->DeleteProduct();
$controller->Direction();

 ?>