<?php

namespace App\Transformers;

/**
 * abstract class define Transformer
 *
 * @author Jack
 *
 */
abstract class Transformer
{

    /**
     * Transform collection to data respon
     * Using all Transform class
     *
     * @param unknown $items
     */
    public function transform_collection($items)
    {
        return array_map([
            $this,
            'transform'
        ], $items);
    }

    /**
     * Tranform item to respon
     * Customize with Transform class
     *
     * @param unknown $item
     */
    public abstract function transform($item);
}
