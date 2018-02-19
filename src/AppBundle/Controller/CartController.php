<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\DBAL\DriverManager;

class CartController extends Controller
{
    /**
     * @Route("/cart.html", name="cart")
     */
    public function indexAction(Request $request)
    {
        $session = new Session();

        $items = $session->get('items');
        $ids = array_keys($items);
        $products = [];

        if (count($ids) > 1) {
            $qb = $this->getDoctrine()->getRepository('AppBundle:Products')
                ->createQueryBuilder('e');

            $qb->add('where', $qb->expr()->in('e.id', $ids));
            $products = $qb->getQuery()->getResult();
        }

        return $this->render('default/cart.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'products' => $products,
            'session_items' => $items
        ]);
    }

    /**
     * @Route("/cart/add/{id}/qty/{qty}", name="cart-add")
     */
    public function addAction(Request $request, $id, $qty)
    {
        $product = $this->getDoctrine()->getRepository('AppBundle:Products')
            ->find($id);

        $sesssion = new Session();

        if ($product) {
            $items = $sesssion->get('items');
            $items[$id] = ['product_id' => $id, 'qty' => $qty];
            $sesssion->set('items', $items);
            return $this->redirectToRoute('cart');
        } else {
            return $this->redirectToRoute('/');
        }
    }

    /**
     * @Route("/cart/remove/{id}", name="cart-remove")
     */
    public function removeAction(Request $request, $id)
    {
        $product = $this->getDoctrine()->getRepository('AppBundle:Products')
            ->find($id);

        $sesssion = new Session();

        $qty = 1;

        if ($product) {
            $items = $sesssion->get('items');
            foreach ($items as $item) {
                if ($id == $item['product_id']) {
                    unset($item);
                }
            }
            $items[] = ['product_id' => $id, 'qty' => $qty];
            $sesssion->set('items', $items);
            return $this->redirectToRoute('cart');
        } else {
            return $this->redirectToRoute('/');
        }
    }
}
