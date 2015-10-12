<?php

namespace NamaKota\ProvinsiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NamaKotaProvinsiBundle:Default:index.html.twig', array('name' => $name));
    }
}
