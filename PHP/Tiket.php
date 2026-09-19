<?php

class Tiket
{
    private $id;
    private $namaFilm;
    private $jenisTiket;
    private $harga;
    private $gambar;

    public function __construct($id, $namaFilm, $jenisTiket, $harga, $gambar)
    {
        $this->id = $id;
        $this->namaFilm = $namaFilm;
        $this->jenisTiket = $jenisTiket;
        $this->harga = $harga;
        $this->gambar = $gambar;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNamaFilm()
    {
        return $this->namaFilm;
    }

    public function getJenisTiket()
    {
        return $this->jenisTiket;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getGambar()
    {
        return $this->gambar;
    }

    public function setNamaFilm($namaFilm)
    {
        $this->namaFilm = $namaFilm;
    }

    public function setJenisTiket($jenisTiket)
    {
        $this->jenisTiket = $jenisTiket;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setGambar($gambar)
    {
        $this->gambar = $gambar;
    }
}
?>