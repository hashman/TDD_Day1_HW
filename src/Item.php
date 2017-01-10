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

    /**
     * 使用者可以自行設定 size_of_group 與希望相加的 key_name
     * @param int    $size_of_group
     * @param string $key_name
     * @return array
     * @throws \Exception
     */
    public function getItemSumGroup(int $size_of_group = 3, string $key_name) : array
    {
        $result = [];

        $i = 0;
        $index = 0;
        foreach ($this->item as $item) {
            if ($i == 0) {
                $result[$index] = 0;
            }

            if (!isset($item[$key_name])) {
                throw new \Exception('key name not found');
            }

            if (!is_numeric($item[$key_name])) {
                throw new \Exception('data must be integer');
            }

            $result[$index] += (int)$item[$key_name];

            if ($i == $size_of_group - 1) {
                $i = 0;
                $index++;
                continue;
            }

            $i++;
        }

        return $result;
    }
}