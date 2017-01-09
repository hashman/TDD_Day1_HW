<?php

use App\Item;

class ItemClassTest extends \PHPUnit\Framework\TestCase
{
    private $item;

    public function setUp()
    {
        $this->item = new Item();
    }

    public function test_for_get_current_item()
    {
        /** arrange */
        $this->addIdCostRevenueSellPriceMockData();

        /** act */
        $result = $this->item->getCurrentItem();

        /** assert */
        $this->assertEquals(11, sizeof($result));
    }

    public function test_for_get_cost_after_sum_group()
    {
        /** arrange */
        $this->addIdCostRevenueSellPriceMockData();
        $key = 'Cost';

        /** act */
        $result = $this->item->getItemSumGroup();
        $actual = $result[$key];
        $expect = [6, 15, 24, 21];

        /** assert */
        $this->assertArraySubset($expect, $actual);
    }

    public function test_for_get_Revenue_after_sum_group()
    {
        /** arrange */
        $this->addIdCostRevenueSellPriceMockData();
        $key = 'Revenue';

        /** act */
        $result = $this->item->getItemSumGroup();
        $actual = $result[$key];
        $expect = [36, 45, 54, 41];

        /** assert */
        $this->assertArraySubset($expect, $actual);
    }

    public function test_for_get_SellPrice_after_sum_group()
    {
        /** arrange */
        $this->addIdCostRevenueSellPriceMockData();
        $key = 'SellPrice';

        /** act */
        $result = $this->item->getItemSumGroup();
        $actual = $result[$key];
        $expect = [66, 75, 84, 61];

        /** assert */
        $this->assertArraySubset($expect, $actual);
    }

    public function test_for_get_Number_after_sum_group()
    {
        /** arrange */
        $this->addIdCostRevenueSellPriceNumberMockData();
        $key = 'Number';

        /** act */
        $result = $this->item->getItemSumGroup();
        $actual = $result[$key];
        $expect = [12, 30, 48, 42];

        /** assert */
        $this->assertArraySubset($expect, $actual);
    }

    private function addIdCostRevenueSellPriceMockData()
    {
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
        $this->item->addItem(['Id' => 11, 'Cost' => 11, 'Revenue' => 21, 'SellPrice' => 31]);
    }

    private function addIdCostRevenueSellPriceNumberMockData()
    {
        $this->item->addItem(['Id' => 1, 'Cost' => 1, 'Revenue' => 11, 'Number' => 2, 'SellPrice' => 21]);
        $this->item->addItem(['Id' => 2, 'Cost' => 2, 'Revenue' => 12, 'Number' => 4, 'SellPrice' => 22]);
        $this->item->addItem(['Id' => 3, 'Cost' => 3, 'Revenue' => 13, 'Number' => 6, 'SellPrice' => 23]);
        $this->item->addItem(['Id' => 4, 'Cost' => 4, 'Revenue' => 14, 'Number' => 8, 'SellPrice' => 24]);
        $this->item->addItem(['Id' => 5, 'Cost' => 5, 'Revenue' => 15, 'Number' => 10, 'SellPrice' => 25]);
        $this->item->addItem(['Id' => 6, 'Cost' => 6, 'Revenue' => 16, 'Number' => 12, 'SellPrice' => 26]);
        $this->item->addItem(['Id' => 7, 'Cost' => 7, 'Revenue' => 17, 'Number' => 14, 'SellPrice' => 27]);
        $this->item->addItem(['Id' => 8, 'Cost' => 8, 'Revenue' => 18, 'Number' => 16, 'SellPrice' => 28]);
        $this->item->addItem(['Id' => 9, 'Cost' => 9, 'Revenue' => 19, 'Number' => 18, 'SellPrice' => 29]);
        $this->item->addItem(['Id' => 10, 'Cost' => 10, 'Revenue' => 20, 'Number' => 20, 'SellPrice' => 30]);
        $this->item->addItem(['Id' => 11, 'Cost' => 11, 'Revenue' => 21, 'Number' => 22, 'SellPrice' => 31]);
    }
}