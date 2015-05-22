<?php

namespace Alexus\GuestBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alexus\GuestBookBundle\Entity\Feedback;
use Alexus\GuestBookBundle\Form\Type\FeedbackType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction($name, Request $request)
    {

        $feedback = new Feedback();
        $feedback->setCreateAt(new \DateTime());
        $feedback->setAuthor($name);
        $feedback->setText('Hello ' . $name . '!');

        $form = $this->createForm(new FeedbackType(), $feedback);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($feedback);
            $em->flush();
        }

        $repository = $this->getDoctrine()->getRepository('AlexusGuestBookBundle:Feedback');
        $messages = $repository->findAll();

        return $this->render(
            'AlexusGuestBookBundle:Default:index.html.twig',
            array(
                'name' => $name,
                'form' => $form->createView(),
                'messages' => $messages
            )
        );
    }
}
