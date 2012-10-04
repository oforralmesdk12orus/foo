<?php

namespace foo\FooBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * foo\FooBundle\Entity\Foo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="foo\FooBundle\Entity\FooRepository")
 */
class Foo
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $foo
     *
     * @ORM\Column(name="foo", type="string", length=255)
     */
    private $foo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set foo
     *
     * @param string $foo
     * @return Foo
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
    
        return $this;
    }

    /**
     * Get foo
     *
     * @return string 
     */
    public function getFoo()
    {
        return $this->foo;
    }
}
