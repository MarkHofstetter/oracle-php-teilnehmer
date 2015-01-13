<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Album\Model\Album;
use Album\Form\AlbumForm;


 class AlbumController extends AbstractActionController
 {
     public function indexAction()
     {
       $objectManager = $this
         ->getServiceLocator()
         ->get('Doctrine\ORM\EntityManager');

       $albums = $objectManager->getRepository('Album\Entity\Album')->findAll();
       return new ViewModel(array(
             'albums' => $albums,
       ));
     }

     public function addAction()
     {
         $form = new AlbumForm();
         $form->get('submit')->setValue('Add');

         $request = $this->getRequest();
         if ($request->isPost()) {
             $album = new Album();
             $form->setInputFilter($album->getInputFilter());
             $form->setData($request->getPost());

             if ($form->isValid()) {
             	   $objectManager = $this
                    ->getServiceLocator()
                    ->get('Doctrine\ORM\EntityManager');

                 $data = $form->getData();
                 $ae = new \Album\Entity\Album();
                 $ae->setTitle($data['title']);
                 $ae->setArtist($data['artist']);

                $objectManager->persist($ae);
                $objectManager->flush();
                 // Redirect to list of albums
                 return $this->redirect()->toRoute('album');
             }
         }
         return array('form' => $form);

     }

     public function editAction()
     {
     }

     public function deleteAction()
     {
     }
 }