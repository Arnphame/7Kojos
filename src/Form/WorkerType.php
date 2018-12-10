<?php

namespace App\Form;

use App\Entity\Worker;
use App\Entity\WorkerTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id',NumberType::class)
            ->add('name',TextType::class)
            ->add('surname',TextType::class)
            ->add('birth_date',DateType::class, array(
                'widget' => 'choice',
                'years' => range(1900,2017),
            ))
            ->add('address',TextType::class)
            ->add('phone_number',TextType::class)
            ->add('email',TextType::class)
            ->add('duty',ChoiceType::class,array(
                'required' => true,
                'choices' => WorkerTypes::getTypes(),
                'choice_label' => function($choice) {
                    return WorkerTypes::getTypeName($choice);
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Worker::class,
        ]);
    }
}
