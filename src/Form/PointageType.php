<?php

namespace App\Form;

use App\Entity\Employers;
use App\Entity\Pointages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PointageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fkEmployer')
            ->add('pointageArrivee')
            ->add('noteArrivee')
            ->add('pointageDepart')
            ->add('noteDepart')
            ->add('actif')
            ->add('fkUserAuthor')
            ->add('creeLe')
            ->add('fkUserModif')
            ->add('modifieLe')
            ->add('description')
            ->add('etat')
            ->add('totalMinute')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pointages::class,
        ]);
    }
}
