<?php

namespace TripOnLife\InfoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('senderName', TextType::class, array('required'=> 'required', 'attr' => array ('placeholder' => 'Имя')));
        $builder->add('senderEmail', EmailType::class, array('required'=> 'required', 'attr' => array ('placeholder' => 'Электронная почта')));
        $builder->add('senderSubject', TextType::class, array('required'=> 'required', 'attr' => array ('placeholder' => 'Тема')));
        $builder->add('senderMessage', TextareaType::class, array('required'=> 'required', 'attr' => array ('placeholder' => 'Сообщение')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'contact';
    }
}

