<?php

namespace App\Controller\Admin;

use App\Entity\Enseigner;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class EnseignerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Enseigner::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud 
            ->setEntityLabelInSingular('Rotation')
            ->setPageTitle('index', 'Suivi des Témoins')
            ;
            
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('temoin','Témoins'),
            AssociationField::new('poste','Poste'),
            DateTimeField::new('startAt'),
            DateTimeField::new('endAt'),
            TextareaField::new('observation'),
            
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
           
            ->add('temoin')
            ->add('poste')
        ;
    }
}
