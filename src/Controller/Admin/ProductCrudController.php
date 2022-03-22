<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
            yield IdField::new('id')->onlyOnIndex();
            yield TextField::new('sku');
            yield TextField::new('name');
            yield TextField::new('category');
            yield Field::new('price');
            yield MoneyField::new('price', 'Currency Price')->setCurrency('EUR')->onlyOnIndex();
            yield Field::new('final', 'Final')->onlyOnIndex();
            yield MoneyField::new('final', 'Currency Final')->setCurrency('EUR')->onlyOnIndex();
            yield Field::new('discount_percentage', 'Discount Percentage')->onlyOnIndex();
            yield Field::new('currency', 'Currency')->onlyOnIndex();

    }

}
