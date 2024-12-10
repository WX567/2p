<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/products/index.php');
    }

    // tests
    public function TestAddProduct(AcceptanceTester $I)
    {
        $I->canSee('Products');
        $I->click('Добавить');
        $I->fillField('name' , 'Гречка');
        $I->fillField('price' , '500');
        $I->fillField('article' , '755143244');
        $I->click('#submit');
        $I->canSee('Гречка 500 755143244');

    }

    public function TestAddReceipt(AcceptanceTester $I)
    {
        $I->canSee('Products');
        $I->click('Добавить поставку');
        $I->selectOption('product_id' , 'Гречка');
        $I->fillField('quantity' , '17');
        $I->click('#submit');
        $I->click('Стараница поставки');
        $date = date("Y-m-d H:i:s");
        $I->canSee($date . ' Гречка 17');
    }
}
