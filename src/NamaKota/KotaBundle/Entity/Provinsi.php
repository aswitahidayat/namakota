<?php

namespace NamaKota\KotaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provinsi
 *
 * @ORM\Table(name="provinsi")
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
    protected $id;

    /**
     * @var Kota
     *
     * @ORM\OneToMany(targetEntity="Kota", mappedBy="provinsi")
     *
     */
    protected $Kota;

    /**
     * @var string
     *
     * @ORM\Column(name="nama_provinsi", type="string", length=255)
     */
    protected $nama_provinsi;

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
     * Set namaKota
     *
     * @param string $namaKota
     *
     * @return Kota
     */
    public function setNamaKota($namaKota)
    {
        $this->namaKota = $namaKota;

        return $this;
    }

    /**
     * Get namaKota
     *
     * @return string
     */
    public function getNamaKota()
    {
        return $this->namaKota;
    }

    
}

