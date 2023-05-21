<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $nama = "Muhammad Azhar Abdurrahman";
    protected $kewarganegaraan = "Indonesia";
    protected $pendidikan = "S1-Teknologi Informasi";
    protected $nim = "2110817310014";
    protected $prodi = "Teknologi Informasi";
    protected $cita_cita = "Web Developer";
    protected $hobi = "Futsal,main game,";
    protected $skill = "HTML/CSS:";
    





    protected $foto1 = "foto.jpg";

    public function getNama()
    {
        return $this->nama;
    }
    public function getKewarganegaraan()
    {
        return $this->kewarganegaraan;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getProdi()
    {
        return $this->prodi;
    }
    public function getcita_cita()
    {
        return $this->cita_cita;
    }
    public function gethobi()
    {
        return $this->nim;
    }
    public function getSkill()
    {
        return $this->skill;
    }


    public function getFoto1()
    {
        return $this->foto1;
    }
}