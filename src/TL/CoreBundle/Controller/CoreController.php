<?php

namespace TL\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use TL\CoreBundle\Entity\Date;
use TL\CoreBundle\Entity\Ticket;

use TL\CoreBundle\Form\DateType;

class CoreController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('TLCoreBundle:Core:index.html.twig');
    }

    public function informationsAction($date)
    {
        return $this->render('TLCoreBundle:Core:informations.html.twig');
    }
}
