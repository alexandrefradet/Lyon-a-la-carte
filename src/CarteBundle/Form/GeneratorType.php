<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02/02/17
 * Time: 14:51
 */

namespace CarteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneratorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('steps', ChoiceType::class, array(
                'choices' => array(3 => 3 , 4 => 4, 5 => 5, 6 => 6 ),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => "Nombre d'étapes"
            ))
            ->add('category', ChoiceType::class, array(
                'choices' => array("Toutes catégories" => "Toutes catégories", "Restaurant" =>"Restaurant" ),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => true,
                'label' => "Catégories"
            ))
            ->add('restaurant', CheckboxType::class)
            ->add('localisation')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        ));
    }

}