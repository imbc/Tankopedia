<?php

namespace Imbc\LandingPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LandingPageController extends Controller
{
    public function indexAction()
    {
        $message = 'Hello world';

        return $this->render( 'ImbcLandingPageBundle:LandingPage:index.html.twig', array(
            'message' => $message,
        ));
    }
}