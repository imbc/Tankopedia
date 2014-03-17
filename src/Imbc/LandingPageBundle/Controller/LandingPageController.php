<?php

namespace Imbc\LandingPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of LandingPageController
 *
 * @author touristtam
 */
class LandingPageController extends Controller
{

    public function indexAction()
    {
        return new Response( 'Hello world!' );
    }
}