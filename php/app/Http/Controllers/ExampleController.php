<?php

namespace App\Http\Controllers;

use App\Domain\Entity\Product;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;

class ExampleController extends Controller
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * Create a new controller instance.
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index()
    {
        return "Hello World!";
    }

    public function entity()
    {
        /** @var Product $p */
//        $p = $this->em->find('App\Domain\Entity\Product', 1);
//        var_dump($p);
        $repo = $this->em->getRepository(Product::class);
        var_dump(new ArrayCollection($repo->findAll()));
    }
}
