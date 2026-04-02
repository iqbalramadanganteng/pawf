<?php

namespace App\Controllers;

class Calculator extends BaseController
{
    /**
     * Menampilkan halaman kalkulator
     * Route: /calculator
     * Dokumentasi: Fungsi ini mengembalikan halaman kalkulator
     * dengan mengambil file index.html dari folder public/calculator
     */
    public function index()
    {
        // Menggunakan view kalkulator dari public
        // Dokumentasi: view ini menampilkan kalkulator
        $content = file_get_contents(ROOTPATH . 'public/calculator/index.html');
        // Mengembalikan response HTML agar browser bisa menampilkan kalkulator
        return $this->response->setHeader('Content-Type', 'text/html')->setBody($content);
    }
}
