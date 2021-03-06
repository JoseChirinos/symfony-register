<?php 
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 * 
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */

class Persona{
	/**
	 * @var int
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 * 
	 * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
	 */
	private $nombre;

	/**
	 * @var string
	 * 
	 * @ORM\Column(name="apellido", type="string", length=50, nullable=false)
	 */
	private $apellido;

	/**
	 * @var string
	 * 
	 * @ORM\Column(name="ci", type="string", length=50, nullable=false)
	 */
	private $ci;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="status", type="boolean", length=1, nullable=false)
     */
    private $status;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set ci
     *
     * @param string $ci
     *
     * @return Persona
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Persona
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}
