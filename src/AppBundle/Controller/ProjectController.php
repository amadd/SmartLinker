<?php
//
// namespace AppBundle\Controller;
//
// use AppBundle\Entity\Project;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\HttpFoundation\Request;
//
// class ProjetController extends Controller
// {
//   /**
//    * @Route("/add", name="addPage")
//    */
//     public function addAction(Request $request)
//     {
//       $project = new Project();
//       $project->setDemandeur("fdgdfgdf");
//       $project->setReference("fgfdgfdfgdfgdfgdfdf");
//
//       $em = $this->getDoctrine()->getManager();
//       $em->persist($project);
//       $em->flush();
//
//       return $this->render('default/index.html.twig', array(
//           'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//       ));
//     }
// }
