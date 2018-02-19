<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DetailController extends Controller
{
    /**
     * @Route("/product-details.html/{id}", name="product-detail")
     */
    public function indexAction(Request $request, $id)
    {
        $product = $this->getDoctrine()->getRepository('AppBundle:Products')
                        ->find($id);

        // replace this example code with whatever you need
        return $this->render('default/detail.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'product' => $product
        ]);
    }
}
