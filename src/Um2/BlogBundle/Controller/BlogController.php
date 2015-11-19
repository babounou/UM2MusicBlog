<?php


namespace Um2\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Um2\BlogBundle\Entity\Article;

class BlogController extends Controller
{

  // INDEX //
  public function indexAction($page)
  {
    // Pour récupérer la liste de tous les articles : on utilise findAll()
    $articles = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('Um2BlogBundle:Article')
                     ->findBy( array(), array('date' => 'desc'), 10, 0);
  
	return $this->render('Um2BlogBundle:Blog:index.html.twig', array(
    'articles' => $articles));
  }
  
  // POST //
  public function postAction($id)
  {    
    $em = $this->getDoctrine()
               ->getManager();
    
    // Pour récupérer un article unique : on utilise find()
    $article = $em->getRepository('Um2BlogBundle:Article')
                  ->find($id);

    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
    
  return $this->render('Um2BlogBundle:Blog:post.html.twig', array(
    'article' => $article
  ));
  }
  
  // AJOUTER //
  public function ajouterAction()
  {
	$article = new Article;
	$article->setDate(new \Datetime());

    $form = $this->createFormBuilder($article)
                 ->add('titre',       'text')
				 ->add('auteur',      'text')
                 ->add('contenu',     'textarea')
                 ->getForm();
				 
    $request = $this->get('request');

    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
		
        return $this->redirect($this->generateUrl('um2_blog_post', array('id' => $article->getId())));
      }
    }

    return $this->render('Um2BlogBundle:Blog:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
	// MODIFIER //
    public function modifierAction($id)
  {
    $em = $this->getDoctrine()
               ->getEntityManager();
    $article = $em->getRepository('Um2BlogBundle:Article')
                  ->find($id);

    // Si l'article n'existe pas, on affiche une erreur 404
    if ($article == null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
    }
	
	$form = $this->createFormBuilder($article)
                 ->add('titre',       'text')
				 ->add('auteur',      'text')
                 ->add('contenu',     'textarea')
                 ->getForm();
				 
    $request = $this->get('request');

    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
		
        return $this->redirect($this->generateUrl('um2_blog_post', array('id' => $article->getId())));
      }
    }
	
    return $this->render('Um2BlogBundle:Blog:modifier.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
	// SUPPRIMER //
    public function supprimerAction($id)
  {
    $em = $this->getDoctrine()
               ->getManager();
			   
    $article = $em->getRepository('Um2BlogBundle:Article')
                  ->find($id);
    
    // Si l'article n'existe pas, on affiche une erreur 404
    if ($article == null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
    }

    $form = $this->createFormBuilder()->getForm();

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) {
        $em->remove($article);
        $em->flush();
        $this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
        return $this->redirect($this->generateUrl('um2_blog_homepage'));
      }
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('Um2BlogBundle:Blog:supprimer.html.twig', array(
      'article' => $article,
      'form'    => $form->createView()
    ));
    
  }
  
  
}