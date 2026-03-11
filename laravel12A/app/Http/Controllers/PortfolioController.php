<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Memanggil Model Contact untuk interaksi database

class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman Welcome (Home)
     */
    public function index() 
    {
        return view('welcome');
    }

    /**
     * Menampilkan halaman About
     */
    public function about() 
    {
        return view('about');
    }

    /**
     * Menampilkan halaman Contact
     */
    public function contact() 
    {
        return view('contact');
    }

    /**
     * Menyimpan pesan dari form Contact ke Database (Konsep Controller ke Model)
     */
    public function storeContact(Request $request) 
    {
        // Validasi input agar data yang masuk sesuai kriteria
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Menyimpan data ke database menggunakan Model Contact
        Contact::create($request->all());

        // Mengembalikan user ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }

    /**
     * Menampilkan Dashboard Pesan (Konsep Model ke Controller ke View)
     */
    public function dashboard() 
    {
        // Mengambil semua pesan dari database, urutkan dari yang terbaru
        $messages = Contact::latest()->get();
        
        // Mengirim data pesan ke file view 'dashboard.blade.php'
        return view('dashboard', compact('messages'));
    }
}