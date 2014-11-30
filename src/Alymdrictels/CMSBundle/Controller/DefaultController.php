<?php

namespace Alymdrictels\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('AlymdrictelsCMSBundle:Page')->findAll();

        return $this->render('AlymdrictelsCMSBundle:Default:index.html.twig',
            array('pages' => $pages
            ));
    }

    public function displayAction($id){
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('AlymdrictelsCMSBundle:Page')
            ->find($id);
        return $this->render('AlymdrictelsCMSBundle:Default:display.html.twig',
            array('page' => $page
        ));
    }
}
