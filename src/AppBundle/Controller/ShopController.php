<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends Controller
{
    /**
     * @Route("/shop.html", name="shop")
     */
    public function indexAction(Request $request)
    {
        $products = $this->getDoctrine()->getRepository('AppBundle:Products')
                        ->findAll();


        // replace this example code with whatever you need
        return $this->render('default/shop.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'products' => $products
        ]);
    }
}
