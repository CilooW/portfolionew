<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 06/11/16
 * Time: 18:18
 */

namespace PortfolioBundle\Controller;


class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortfolioBundle:Default:index.html.twig');
    }
}