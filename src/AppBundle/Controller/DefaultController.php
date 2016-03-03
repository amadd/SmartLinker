<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/add", name="addPage")
     */
      public function addAction(Request $request)
      {
        $project = new Project();
        $project->setDemandeur("fdgdfgdf");
        $project->setReference("fgfdgfdfgdfgdfgdfdf");

        $em = $this->getDoctrine()->getManager();
        $em->persist($project);
        $em->flush();

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
      }

      /**
       * @Route("/viewProject/{id}", name="viewPage")
       */
        public function viewAction($id)
        {
          $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project');

          $project = $repository->find($id);
          if($project === null){
            throw new NotFoundHttpException("Le projet avec l'id ".$id." n'existe pas.");
          }

          // Le render ne change pas, on passait avant un tableau, maintenant un objet
          return $this->render('AppBundle:default:index.html.twig', array(
            'project' => $project
          ));
        }

        /**
         * @Route("/deleteProject/{id}", name="deleteProject")
         */
          public function deleteAction($id)
          {
            $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project');

            $project = $repository->find($id);
            
            if($project === null){
              $r = "projet non trouvé";
            }else{
              $r = "projet trouvé";
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($project);
            $em->flush();

            // Le render ne change pas, on passait avant un tableau, maintenant un objet
            return $this->render('AppBundle:default:index.html.twig', array(
              'project' => $r
            ));
          }
}
