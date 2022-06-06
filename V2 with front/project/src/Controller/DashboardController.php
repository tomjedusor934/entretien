<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\CommentsType;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(Request $request): Response
    {

    //partie commentaires
    // on creer l objet commentaire
    $comment = new Comments;

    //on genere le formulaire

    $commentForm = $this->createForm(CommentsType::class, $comment);

    $commentForm->handleRequest($request);

    //traitement du formulaire
    if ($commentForm->isSubmitted() &&$commentForm->isValid()) {
        $comment->setCreatedAt(new DateTimeImmutable());

        $em = $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();

        $this->addFlash('message', 'Votre commentaire a bien été envoyé');
        return $this->redirectToRoute('dashboard');
    }


        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'commentForm' => $commentForm->createView(),
        ]);
    }
}
