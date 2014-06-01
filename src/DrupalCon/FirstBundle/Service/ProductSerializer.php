<?php

namespace DrupalCon\FirstBundle\Service;

use DrupalCon\FirstBundle\Entity\Product;

class ProductSerializer
{
    public function serialize(Product $product)
    {
        $data = array(
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
        );

        return json_encode($data);
    }
} 