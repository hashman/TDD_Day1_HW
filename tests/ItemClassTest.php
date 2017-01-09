<?php

use App\Item;

class ItemClassTest extends \PHPUnit\Framework\TestCase
{
    private $item;

    public function setUp()
    {
        $this->item = new Item();
        $this->item->addItem(['Id' => 1, 'Cost' => 1, 'Revenue' => 11, 'SellPrice' => 21]);
        $this->item->addItem(['Id' => 2, 'Cost' => 2, 'Revenue' => 12, 'SellPrice' => 22]);
        $this->item->addItem(['Id' => 3, 'Cost' => 3, 'Revenue' => 13, 'SellPrice' => 23]);
        $this->item->addItem(['Id' => 4, 'Cost' => 4, 'Revenue' => 14, 'SellPrice' => 24]);
        $this->item->addItem(['Id' => 5, 'Cost' => 5, 'Revenue' => 15, 'SellPrice' => 25]);
        $this->item->addItem(['Id' => 6, 'Cost' => 6, 'Revenue' => 16, 'SellPrice' => 26]);
        $this->item->addItem(['Id' => 7, 'Cost' => 7, 'Revenue' => 17, 'SellPrice' => 27]);
        $this->item->addItem(['Id' => 8, 'Cost' => 8, 'Revenue' => 18, 'SellPrice' => 28]);
        $this->item->addItem(['Id' => 9, 'Cost' => 9, 'Revenue' => 19, 'SellPrice' => 29]);
        $this->item->addItem(['Id' => 10, 'Cost' => 10, 'Revenue' => 20, 'SellPrice' => 30]);
        $this->item->addItem(['Id' => 11, 'Cost' => 12, 'Revenue' => 21, 'SellPrice' => 31]);
    }

    public function test_for_get_current_item()
    {
        /** arrange */


        /** act */
        $result = $this->item->getCurrentItem();

        /** assert */
        $this->assertEquals(11, sizeof($result));
    }
}