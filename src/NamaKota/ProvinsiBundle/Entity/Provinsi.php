<?php

namespace NamaKota\ProvinsiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provinsi
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Provinsi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nama_provinsi", type="string", length=255)
     */
    private $namaProvinsi;


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
     * Set namaProvinsi
     *
     * @param string $namaProvinsi
     *
     * @return Provinsi
     */
    public function setNamaProvinsi($namaProvinsi)
    {
        $this->namaProvinsi = $namaProvinsi;

        return $this;
    }

    /**
     * Get namaProvinsi
     *
     * @return string
     */
    public function getNamaProvinsi()
    {
        return $this->namaProvinsi;
    }
}

