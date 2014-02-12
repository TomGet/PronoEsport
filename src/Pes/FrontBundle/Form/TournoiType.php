<?php

namespace Pes\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TournoiType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom : ', 'attr' => array('class' => 'form-control')))
            ->add('site', 'text', array('label' => 'Site : ', 'required' => false, 'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pes\FrontBundle\Entity\Tournoi'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pes_frontbundle_tournoi';
    }
}
