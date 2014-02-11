<?php

namespace Pes\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CourrierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom : ', 'attr' => array('class' => 'form-control')))
            ->add('email', 'text', array('label' => 'Email : ', 'attr' => array('class' => 'form-control')))
            ->add('sujet', 'text', array('label' => 'Sujet : ', 'attr' => array('class' => 'form-control')))
            ->add('corps', 'textarea', array('label' => 'Message : ', 'attr' => array('class' => 'form-control')))
            //->add('date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pes\FrontBundle\Entity\Courrier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pes_frontbundle_courrier';
    }
}
