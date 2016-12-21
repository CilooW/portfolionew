<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\Culture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Culture controller.
 *
 */
class CultureController extends Controller
{
    /**
     * Lists all culture entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cultures = $em->getRepository('PortfolioBundle:Culture')->findAll();

        return $this->render('culture/index.html.twig', array(
            'cultures' => $cultures,
        ));
    }

    /**
     * Creates a new culture entity.
     *
     */
    public function newAction(Request $request)
    {
        $culture = new Culture();
        $form = $this->createForm('PortfolioBundle\Form\CultureType', $culture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($culture);
            $em->flush($culture);

            return $this->redirectToRoute('culture_show', array('id' => $culture->getId()));
        }

        return $this->render('culture/new.html.twig', array(
            'culture' => $culture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a culture entity.
     *
     */
    public function showAction(Culture $culture)
    {
        $deleteForm = $this->createDeleteForm($culture);

        return $this->render('culture/show.html.twig', array(
            'culture' => $culture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing culture entity.
     *
     */
    public function editAction(Request $request, Culture $culture)
    {
        $deleteForm = $this->createDeleteForm($culture);
        $editForm = $this->createForm('PortfolioBundle\Form\CultureType', $culture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('culture_edit', array('id' => $culture->getId()));
        }

        return $this->render('culture/edit.html.twig', array(
            'culture' => $culture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a culture entity.
     *
     */
    public function deleteAction(Request $request, Culture $culture)
    {
        $form = $this->createDeleteForm($culture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($culture);
            $em->flush($culture);
        }

        return $this->redirectToRoute('culture_index');
    }

    /**
     * Creates a form to delete a culture entity.
     *
     * @param Culture $culture The culture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Culture $culture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('culture_delete', array('id' => $culture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
