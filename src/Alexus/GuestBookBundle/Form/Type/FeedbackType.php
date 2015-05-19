<?php

namespace Alexus\GuestBookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedbackType extends AbstractType {

    public function builForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('author')
            ->add('text')
            ->add('save', 'submit', array('label' => 'Create Task'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Alexus\GuestBookBundle\Entity\Feedback',
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'alexus_feedback';
    }
}