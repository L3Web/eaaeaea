<?php

namespace App\Controller\boutique;

use App\Controller\Controller;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ProductDescController extends Controller
{
    /**
     * @Route("/{_locale<%app.supported_locales%>}/boutique/informations/{id}", name="app_product_informations")
     */
    public function showProduct( ProductRepository $productRepository, Product $id): Response
    {

        $res = $productRepository->findOneBy(array("id"=>$id));
        return $this->render("informations/productInformation.html.twig", [
            "product" => $res
        ]);
    }
}