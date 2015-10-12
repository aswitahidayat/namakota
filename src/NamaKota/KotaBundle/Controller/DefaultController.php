<?php

namespace NamaKota\KotaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NamaKotaKotaBundle:Default:index.html.twig');
    }
}
