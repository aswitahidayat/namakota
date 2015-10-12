<?php

namespace NamaKota\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NamaKotaHomeBundle:Default:index.html.twig');
    }
}
