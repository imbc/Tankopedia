<?php

namespace Imbc\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Imbc\SecurityBundle\Form\Type\RoleType;
use Imbc\SecurityBundle\Entity\Role;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ( $request->attributes->has( SecurityContext::AUTHENTICATION_ERROR ))
        {
            $error = $request->attributes->get( SecurityContext::AUTHENTICATION_ERROR );
        }
        else
        {
            $error = $session->get( SecurityContext::AUTHENTICATION_ERROR );
            $session->remove( SecurityContext::AUTHENTICATION_ERROR );
        }

        return $this->render( 'ImbcSecurityBundle:Security:login.html.twig', array(
                // last username entered by the user
                'last_username' => $session->get( SecurityContext::LAST_USERNAME ),
                'error'         => $error,
        ));
    }

    public function rolesAction( Request $request )
    {
        $em = $this->getDoctrine()->getEntityManager();
        $roleRepo = $em->getRepository( 'ImbcSecurityBundle:Role' );
        $role = new Role( '' );
        $form = $this->createForm( new RoleType(), $role );
        if ( $request->getMethod() == 'POST' && $request->get( 'role' ) )
        {
            $data = $request->get( 'role' );
            if ( array_key_exists( 'id', $data ) )
            {
                $editedRole = $roleRepo->find( $data['id'] );
                if ( $editedRole )
                {
                    $form = $this->createForm( new RoleType(), $editedRole );
                    $role = $editedRole;
                }
            }
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $role );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'admin_roles' ) );
            }
        }
        $roles = $roleRepo->findAll();
        $forms = array();
        foreach ( $roles as $role )
        {
            $forms[$role->getId()] = $this->createForm( new RoleType(), $role );
        }
        return $this->render( 'ImbcSecurityBundle:Roles:index.html.twig', array(
            'roles' => $roles,
            'forms' => $forms,
            'addForm' => $form->createView(),
        ));

    }
}