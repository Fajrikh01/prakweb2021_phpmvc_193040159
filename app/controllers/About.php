<?php

class About {
    public function index($nama = 'Fajri', $pekerjaan = 'Wannable') {
        echo "Halo, nama saya $nama, saya seorang $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}