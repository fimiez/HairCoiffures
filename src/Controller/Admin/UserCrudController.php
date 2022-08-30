<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom', 'Nom')
                ->setTextAlign('center'),
            TextField::new('prenom', 'Prénom')
                ->setTextAlign('center'),
            TextField::new('email', 'Email')
                ->setTextAlign('center'),

            TextField::new('telephone', 'Téléphone')
                ->setTextAlign('center'),
            
            ArrayField::new('roles', 'Role')
                ->setTextAlign('center'),
        ];
    }
    
}