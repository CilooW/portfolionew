<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{
    /**
     * Lists all projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projets = $em->getRepository('PortfolioBundle:Projet')->findAll();

        return $this->render('projet/index.html.twig', array(
            'projets' => $projets,
        ));
    }

    /**
     * Creates a new projet entity.
     *
     */
    public function newAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm('PortfolioBundle\Form\ProjetType', $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $projet->getImgpath();
            $fileName = md5(uniqid()).'.'.$file->guessExtension(); // md5 est un format de cryptage et guessExtenstion est pour mettre la meme extension qu'avant
            $file->move(
                $this->getParameter('upload_directory'),
                $fileName
            );
            $projet->setImgpath($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush($projet);

            return $this->redirectToRoute('projet_show', array('id' => $projet->getId()));
        }

        return $this->render('projet/new.html.twig', array(
            'projet' => $projet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a projet entity.
     *
     */
    public function showAction(Projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);

        return $this->render('projet/show.html.twig', array(
            'projet' => $projet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing projet entity.
     *
     */
    public function editAction(Request $request, Projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);
        $editForm = $this->createForm('PortfolioBundle\Form\ProjetType', $projet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('projet_edit', array('id' => $projet->getId()));
        }

        return $this->render('projet/edit.html.twig', array(
            'projet' => $projet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a projet entity.
     *
     */
    public function deleteAction(Request $request, Projet $projet)
    {
        $form = $this->createDeleteForm($projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush($projet);
        }

        return $this->redirectToRoute('projet_index');
    }

    /**
     * Creates a form to delete a projet entity.
     *
     * @param Projet $projet The projet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Projet $projet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projet_delete', array('id' => $projet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
