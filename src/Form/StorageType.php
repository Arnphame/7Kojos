<?php

namespace App\Form;

use App\Entity\Storage;
use App\Repository\CPURepository;
use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StorageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product_number',NumberType::class)
            ->add('name',TextType::class)
            ->add('price',MoneyType::class)
            ->add('discount_price',MoneyType::class)
            ->add('quantity',NumberType::class)
            ->add('long_description',TextType::class)
            ->add('short_description',TextType::class)
            ->add('warranty_time',NumberType::class)
            ->add('size',TextType::class)
            ->add('storageType',TextType::class)
            ->add('form',TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Storage::class,
        ]);
    }
}
