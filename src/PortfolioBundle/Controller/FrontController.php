<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 06/11/16
 * Time: 18:18
 */

namespace PortfolioBundle\Controller;




use PortfolioBundle\PortfolioBundle;
use PortfolioBundle\Repository\CitationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        /**
         * @var $repo CitationRepository
         */
        $repo = $em->getRepository('PortfolioBundle:Citation');
        $citation = $repo->getRandomQuote();


        return $this->render('PortfolioBundle:Default:index.html.twig', array(
            'citation' => $citation[0],
        ));
    }
}