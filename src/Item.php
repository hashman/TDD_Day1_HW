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

    public function getItemSumGroup()
    {
        $result = [];
        foreach (array_keys($this->item[0]) as $item) {
            $result[$item] = [];
        }

        $i = 0;
        $index = 0;
        foreach ($this->item as $item) {
            if ($i == 0) {
                foreach (array_keys($result) as $key) {
                    $result[$key][$index] = 0;
                }
            }

            foreach (array_keys($result) as $key) {
                $result[$key][$index] += (int)$item[$key];
            }

            if ($i == 2) {
                $i = 0;
                $index++;
                continue;
            }

            $i++;
        }

        return $result;
    }
}