<?php

namespace Imbc\SearchEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of SearchController
 *
 * @author touristtam
 */
class SearchController extends Controller
{
    public function autocompleteAction( Request $request )
    {
        $em = $this->getDoctrine()->getEntityManager();
        $tankTable = $em->getClassMetadata( 'ImbcTankopediaBundle:Tank' )->getTableName();
        $term = $request->get( 'term' );
        $connection = $this->get( 'database_connection' );
        $dql = "SELECT t.id, t.name as value
                FROM " . $tankTable . " t
                WHERE t.name LIKE ?
                ORDER BY t.name ASC";
        $entities = $connection->fetchAll( $dql, array( $term . '%' ));

        return new Response( json_encode( $entities ));
    }
}