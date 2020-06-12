<?php

namespace App\Form;

use App\Entity\ShortLink;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShortLinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('fullUrl')
            ->add('shortCode', TextType::class, ['help' => 'This string is generated automatically and can not
             be changed.', 'disabled'=>true])
//            ->add('createdAt')
//            ->add('updatedAt')
            ->add('Save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ShortLink::class,
        ]);
    }
}
