<?php

namespace App\Form;

use App\Entity\Famille;
use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProduitType extends AbstractType
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
            ->add('libelle', TextType::class, $this->getConfiguration("Libellé Produit", "Entrez le libellé du produit"), [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('buyingPrice', MoneyType::class, $this->getConfiguration("Prix d'achat", "Saisir le prix d'achat"))
            ->add('sellingPrice', MoneyType::class, $this->getConfiguration("Prix de vente", "Saisir le prix de vente"))
            ->add('tva', NumberType::class, $this->getConfiguration("TVA", "Saisir le taux de la tva (5, 10, 15, 20)"))
            ->add('stock', NumberType::class, $this->getConfiguration("Quanté en stock", "Entrez la quantité en stock"))
            ->add('stockInit', NumberType::class, $this->getConfiguration("Stock initial", "Entrez le stock initial"))
            ->add('stockAlert', NumberType::class, $this->getConfiguration("Epuisement de stock", "Entrez le stock alert"))
            ->add('famille', EntityType::class, $this->getConfiguration("Famille de produit", "Sélectionnez une famille de produit", [
                'class' => Famille::class,
                'choice_label' => 'libelle',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
