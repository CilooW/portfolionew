<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\Citation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Citation controller.
 *
 */
class CitationController extends Controller
{
    /**
     * Lists all citation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $citations = $em->getRepository('PortfolioBundle:Citation')->findAll();

        return $this->render('citation/index.html.twig', array(
            'citations' => $citations,
        ));
    }

    /**
     * Creates a new citation entity.
     *
     */
    public function newAction(Request $request)
    {
        $citation = new Citation();
        $form = $this->createForm('PortfolioBundle\Form\CitationType', $citation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($citation);
            $em->flush($citation);

            return $this->redirectToRoute('citation_show', array('id' => $citation->getId()));
        }

        return $this->render('citation/new.html.twig', array(
            'citation' => $citation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a citation entity.
     *
     */
    public function showAction(Citation $citation)
    {
        $deleteForm = $this->createDeleteForm($citation);

        return $this->render('citation/show.html.twig', array(
            'citation' => $citation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing citation entity.
     *
     */
    public function editAction(Request $request, Citation $citation)
    {
        $deleteForm = $this->createDeleteForm($citation);
        $editForm = $this->createForm('PortfolioBundle\Form\CitationType', $citation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('citation_edit', array('id' => $citation->getId()));
        }

        return $this->render('citation/edit.html.twig', array(
            'citation' => $citation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a citation entity.
     *
     */
    public function deleteAction(Request $request, Citation $citation)
    {
        $form = $this->createDeleteForm($citation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($citation);
            $em->flush($citation);
        }

        return $this->redirectToRoute('citation_index');
    }

    /**
     * Creates a form to delete a citation entity.
     *
     * @param Citation $citation The citation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Citation $citation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('citation_delete', array('id' => $citation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
