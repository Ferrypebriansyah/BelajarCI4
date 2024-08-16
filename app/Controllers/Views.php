<?php

namespace App\Controllers;

class Views extends BaseController
{
    public function index(): string
    {
        return view('index'); 
    }
    //Data Mahasiswa Views
    public function datamhs(): string {
        return view('pages/DataMahasiswa', ['title' => 'Data Mahasiswa']);
    }
    //Data Mahasiswa Views
    public function ttgmhs(): string {
        return view('pages/TentangMahasiswa', ['title' => 'Tentang Mahasiswa']);
    }
    //Data Mahasiswa Views
    public function infkampus(): string {
        return view('pages/InfoKampus', ['title' => 'Info Kampus']);
    }
}