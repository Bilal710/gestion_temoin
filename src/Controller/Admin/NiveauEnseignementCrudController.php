<?php

namespace App\Controller\Admin;

use App\Entity\NiveauEnseignement;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NiveauEnseignementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NiveauEnseignement::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des Niveaux d\'enseignements')
            ->setEntityLabelInSingular('Niveau')
            ;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
