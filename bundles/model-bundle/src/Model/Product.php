<?php

namespace App\Bundle\ModelBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
