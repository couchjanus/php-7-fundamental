<?php

require_once realpath(MODELS.'Product.php');

class HomeController extends Controller
{

    public function index()
    {
        // $breadcrumb = new Breadcrumb();

        // $data['breadcrumb'] = $breadcrumb->build(
        //     array()
        // );

        $data['breadcrumb'] = $this->breadcrumb->build(
            array()
        );
        $data['title'] = 'Our <b>Best Cat Members</b>';
        $data['subtitle'] = 'Lorem Ipsum не є випадковим набором літер';
        $this->_view->render('home/index', $data);
    }

    public function getProduct($vars)
    {
        $products = Product::getProducts();
        echo json_encode($products);
    }

}
