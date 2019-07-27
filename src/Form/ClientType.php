<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ClientType extends AbstractType
{

    /**
     * Permet d'avoir la configuration de base d'un champ
     *
     * @param string $label
     * @param string $placeholder
     * @param array $options
     * @return array
     */
    private function getConfiguration($label, $placeholder, $options = [])
    {
        return array_merge([
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ], $options);
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextType::class, $this->getConfiguration("Désignation client", "Entrez une désignation client"))
            ->add('salesManager', TextType::class, $this->getConfiguration("Directeur commercial", "Entrez le nom du directeur commercial"))
            ->add('financialOfficer', TextType::class, $this->getConfiguration("Directeur financier", "Entrez le nom du directeur financier"))
            ->add('deliveryAddress', TextareaType::class, $this->getConfiguration("Adresse de livraison", "Saisir l'adresse de livraison"))
            ->add('billingAddress', TextareaType::class, $this->getConfiguration("Adresse de facturation", "Saisir l'adresse de facturation"))
            ->add('phone')
            ->add('portable')
            ->add('fax')
            ->add('email')
            ->add('soldeInit')
            ->add('soldeFinal');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
