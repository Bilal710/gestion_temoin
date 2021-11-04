<?php

namespace App\Controller\Admin;

use App\Entity\Users;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Users::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des témoins')
            ->setEntityLabelInSingular('Témoins')
            ->setEntityLabelInPlural('Témoins')
            ->setDefaultSort(['id' => 'ASC']) 

        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstName'),
            TextField::new('lastName'),
            ChoiceField::new('sexe')
                ->setChoices(['M' => 'M', 'F' => 'F']),
            DateTimeField::new('naissanceAt'),
            AssociationField::new('pays','Pays'),
            AssociationField::new('niveau','Niveau d\'enseignement'),
            AssociationField::new('profession','Profession')
        ];
    }
}
