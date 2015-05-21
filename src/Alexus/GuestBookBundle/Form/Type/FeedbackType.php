<?php

namespace Alexus\GuestBookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedbackType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('author')
            ->add('text', null, array(
                'attr' => array(
                    'class' => 'tinymce',
                    'data-theme' => 'bbcode' // Skip it if you want to use default theme
                )
            ))
            ->add('save', 'submit', array('label' => 'Оставить запись'));
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