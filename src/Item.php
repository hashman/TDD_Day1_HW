<?php
namespace App;

use phpDocumentor\Reflection\Types\Array_;

class Item
{
    private $item = null;

    /**
     * Item constructor.
     * Initial Item array
     */
    public function __construct()
    {
        $this->item = [];
    }

    /**
     * add $items in item array
     * @param array $item
     */
    public function addItem(Array $item)
    {
        $this->item[] = $item;
    }

    /**
     * get current item
     * @return array
     */
    public function getCurrentItem() : array
    {
        return $this->item;
    }
}