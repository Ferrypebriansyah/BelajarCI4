<?php

namespace App\Controllers;

class Views extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    //All Menu Views
    public function allmen(): string
    {
        return view('pages/AllHalal', ['title' => 'All HalalIndo Menu']);
    }
    //Food Menu Views
    public function hllfood(): string
    {
        return view('pages/HalalFood', ['title' => 'Halal Food Menu']);
    }
    //Drinks Menu Views
    public function hlldrink(): string
    {
        return view('pages/HalalDrink', ['title' => 'Halal Drink Menu']);
    }
    //add On  Views
    public function addon(): string
    {
        return view('pages/AddOn', ['title' => 'Add On Items']);
    }
    //Management Menu Views
    public function magmenu(): string
    {
        return view('pages/MenuManagement', ['title' => 'Menu Management']);
    }
    //Transaksi Views
    public function trans(): string
    {
        return view('pages/Transaction', ['title' => 'Transaction']);
    }
    //Seetings Views
    public function setmenu(): string
    {
        return view('pages/Settings', ['title' => 'Settings']);
    }
}
