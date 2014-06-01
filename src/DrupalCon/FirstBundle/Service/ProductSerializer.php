<?php

namespace DrupalCon\FirstBundle\Service;

use DrupalCon\FirstBundle\Entity\Product;
use Symfony\Component\Routing\Router;

class ProductSerializer
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function serialize(Product $product)
    {
        $data = array(
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'url' => $this->router->generate('product_show', array('id' => $product->getId()))
        );

        return json_encode($data);
    }
} 