<?php

namespace TL\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('TLCoreBundle:Core:index.html.twig');
    }
}
