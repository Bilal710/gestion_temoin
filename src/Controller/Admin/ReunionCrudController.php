<?php

namespace App\Controller\Admin;

use App\Entity\Reunion;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class ReunionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reunion::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud 
            ->setEntityLabelInSingular('Réunion')
            ->setPageTitle('index', 'Gestion des Réunions')
            ;
            
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('type')
                ->setChoices(['Prière'=>'Prière','Révision'=>'Révision','Rotation de poste'=>'Rotation de poste']),
            DateTimeField::new('reunionAt','Date de Réunion'),
            
        ];
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
