<?php

namespace Pes\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class CompetitionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom : ', 'attr' => array('class' => 'form-control')))
            //->add('ajout', 'text', array('ajout' => 'Nom : ', 'attr' => array('class' => 'form-control')))
            ->add('date', 'datetime', array('label' => 'Date & Heure : '))
            //->add('resultat', 'text', array('label' => 'Nom : ', 'attr' => array('class' => 'form-control')))
            ->add('typeCompetition' ,'entity', array(
				'attr' => array('class' => 'form-control'),
				'class' => 'PesFrontBundle:TypeCompetition',
				'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('tc')
							->orderBy('tc.libelle', 'ASC');
					},
			))
            ->add('tournoi' ,'entity', array(
				'attr' => array('class' => 'form-control'),
				'class' => 'PesFrontBundle:Tournoi',
				'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('t')
							->orderBy('t.nom', 'ASC');
					},
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pes\FrontBundle\Entity\Competition'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pes_frontbundle_competition';
    }
}
