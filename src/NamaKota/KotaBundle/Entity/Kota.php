<?php

namespace NamaKota\KotaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kota
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Kota
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
     * @var string
     *
     * @ORM\Column(name="nama_kota", type="string", length=255)
     */
    protected $namaKota;

    /**
     * @var string
     *
     * @ORM\Column(name="provinsi", type="string", length=255)
     */
    protected $provinsi;

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

    /**
     * Set provinsiId
     *
     * @param integer $provinsiId
     *
     * @return Kota
     */
    public function setProvinsi($provinsi)
    {
        $this->provinsi = $provinsi;

        return $this;
    }

    /**
     * Get provinsi
     *
     * @return integer
     */
    public function getProvinsi()
    {
        return $this->provinsi;
    }
}

