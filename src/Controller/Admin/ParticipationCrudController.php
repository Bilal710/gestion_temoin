<?php

namespace App\Controller\Admin;

use App\Entity\Participation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ParticipationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Participation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud 
            ->setEntityLabelInSingular('Participation')
            ->setPageTitle('index', 'Participation aux réunions')
            ;
            
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('temoin','Témoin'),
            AssociationField::new('reunion','Réunions'),
            ChoiceField::new('presence')
                ->setChoices(['Présent'=>'Présent','Absent'=>'Absent','Permisionnaire'=>'Permisionnaire','En mission'=>'En mission']),
            TextareaField::new('motifAbsence','Motif d\'absence'),
            
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
           
            ->add('reunion')
            ->add('temoin')
        ;
    }
}
