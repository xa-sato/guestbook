<?php

namespace App\Controller\Admin;


use App\Entity\Conference;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ConferenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Conference::class;
    }

//    public function configureFields(string $pageName): iterable
//    {
//        yield IdField::new('id')->hideOnForm();
//        yield TextField::new('city');
//        yield IntegerField::new('year');
//        yield BooleanField::new('isInternational');
//    }
}
