<?php

namespace App\Controller\Admin;

use App\Entity\Postes;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class PostesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Postes::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des Postes')
            ->setEntityLabelInSingular('Poste')

        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            AssociationField::new('postPays','Pays'),
            TextField::new('adrresse'),
            TelephoneField::new('phoneNumber', 'Numéro de Téléphone'),
            TextField::new('firstDay', 'Jour 1 '),
            TextField::new('secondDay', 'Jour 2'),
            DateField::new('createdAt', 'Date de création'),
        ];
    }
}
