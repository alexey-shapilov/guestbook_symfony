<?php

namespace Alexus\GuestBookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FeedbackType extends AbstractType {

    public function builForm(FormBuilderInterface $builder, array $options){
        $builder->add('');
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