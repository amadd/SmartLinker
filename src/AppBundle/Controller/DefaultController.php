<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Address;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPExcel_IOFactory;
use PHPExcel_Writer_Excel2007;

class DefaultController extends Controller
{
  /**
  * @Route("/", name="homepage")
  */
  public function indexAction(Request $request)
  {

    $busReader = PHPExcel_IOFactory::createReader('Excel2007');
    $busReader->setReadDataOnly(true);
    $objPHPExcel = $busReader->load("C:\BUS SALES.xlsx");
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
    //Read each line of Excel file
    foreach ($objWorksheet->getRowIterator() as $row) {
      //The read start
      if ($row->getRowIndex() >= 10) {
        //The read stop
        if ($objWorksheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue() != "TOTAL Base LinkerConnect (€HT) :  ") {

          $name = $objWorksheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue();
          $city = $objWorksheet->getCellByColumnAndRow(5, $row->getRowIndex())->getValue();
          $countryName = "France";
          $postalCode = $objWorksheet->getCellByColumnAndRow(4, $row->getRowIndex())->getValue();
          $numeroVoie = $objWorksheet->getCellByColumnAndRow(2, $row->getRowIndex())->getValue();
          $voie = $objWorksheet->getCellByColumnAndRow(3, $row->getRowIndex())->getValue();
          $siret = $objWorksheet->getCellByColumnAndRow(76, $row->getRowIndex())->getValue();

          //If cell are not empty
          if (!empty($name) && !empty($city) && !empty($postalCode) && !empty($voie) && !empty($siret)) {
            $address = new Address();

            $address->setName($name);
            $address->setCity($city);
            $address->setCountryName($countryName);
            $address->setPostalCode($postalCode);
            $address->setNumeroVoie($numeroVoie);
            $address->setVoie($voie);
            $address->setSiret($siret);

            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
          }
        }else{
          break;
        }
      }
    }

    $em->flush();

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
