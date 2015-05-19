<?php

namespace Alexus\GuestBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alexus\GuestBookBundle\Entity\Feedback;
use Alexus\GuestBookBundle\Form\Type\FeedbackType;


class DefaultController extends Controller
{
    public function indexAction($name)
    {

        $feedback = new Feedback();
        $feedback->setCreateAt();
        $feedback->setAuthor('alexus');
        $feedback->setText('Hello World!');

        $form = $this->createForm(new FeedbackType(), $feedback);

//        $form = $this->createFormBuilder($feedback)
//            ->add('author')
//            ->add('text')
//            ->add('save', 'submit', array('label' => 'Create Task'))
//            ->getForm();
        return $this->render('AlexusGuestBookBundle:Default:index.html.twig', array('name' => $name, 'form' => $form->createView()));
    }
}
