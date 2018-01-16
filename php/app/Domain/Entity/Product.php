<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products", options={"comment":"product schema"})
 */
class Product
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     **/
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", options={"comment":"name field"})
     **/
    protected $name;
}