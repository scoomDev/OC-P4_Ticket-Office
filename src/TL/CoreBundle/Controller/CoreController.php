<?php

namespace TL\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use TL\CoreBundle\Entity\Basket;
use TL\CoreBundle\Entity\Ticket;

use TL\CoreBundle\Form\BasketType;
use TL\CoreBundle\Form\TicketType;

class CoreController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $date = $_POST['_submit'];
            $nbrPerson = $_POST['nbr_person'];
            return $this->redirectToRoute('tl_core_informations', [
                'date' => $date,
                'nbrPerson' => $nbrPerson
            ]);
        }

        return $this->render('TLCoreBundle:Core:index.html.twig');
    }

    public function informationsAction(Request $request, $date, $nbrPerson)
    {
        $em = $this->getDoctrine()->getManager();
        $basket = new Basket();
        $formInfo = $this->get('form.factory')->create(BasketType::class, $basket);

        if($request->isMethod('POST') && $formInfo->handleRequest($request)->isValid()) {
            dump($_POST);
            die('test');

            $request->getSession()->getFlashBag()->add('info', "Ok Man !");

            return $this->redirectToRoute('tl_core_homepage');
        }

        return $this->render('TLCoreBundle:Core:informations.html.twig', [
            'date' => $date,
            'nbrPerson' => $nbrPerson,
            'formInfo' => $formInfo->createView()
        ]);
    }
}
