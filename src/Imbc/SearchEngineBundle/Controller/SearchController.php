<?php

namespace Imbc\SearchEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of SearchController
 *
 * @author touristtam
 */
class SearchController extends Controller
{

    public function indexAction()
    {
        return new Response( 'Hello world!' );
    }
}