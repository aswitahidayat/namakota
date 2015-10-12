<?php

namespace NamaKota\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NamaKotaHomeBundle:Default:index.html.twig');
    }

    public function helloAction()
	{
	    return new Response('Hello world!');
	}
}
