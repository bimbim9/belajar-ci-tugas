<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Redirect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Cek apakah pengguna telah login
        if (session()->has('isLoggedIn')) {
            // Redirect ke halaman Contact jika sudah login
            return redirect()->to(site_url('v_contact'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu melakukan apa pun setelah request
    }
}