<?php
/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */

namespace SarSport\Bundle\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use SarSport\Bundle\UserBundle\Form\Type\Extension\SexType;

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('firstName', null, array('label' => 'form.firstName', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('lastName', null, array('label' => 'form.lastName', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('secondName', null, array('label' => 'form.secondName', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('birthday','birthday', array('label' => 'form.birthday', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('sex', new SexType(), array('label' => 'form.sex', 'translation_domain' => 'FOSUserBundle'));
    }

    public function getName()
    {
        return 'sarsport_user_registration';
    }
}
