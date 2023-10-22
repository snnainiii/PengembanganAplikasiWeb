@extends('layouts/main')

@section('content')
<div class="tugas">
<h1 align="center">Tugas Pendahuluan 6</h1>
    <div class="soal">
    <ol type="1">
        {{-- soal no 1 --}}
        <li><b> Jelaskan apa yang dimaksud dengan Framework</b>
                <p>Framework adalah kerangka kerja yang digunakan untuk membantu web developer saat menuliskan code dalam pengembangan 
                    aplikasi berbasis desktop atau aplikasi berbasis website. Dengan menggunakan framework developer dapat jauh lebih mudah, 
                    cepat dan terstruktur rapi dalam menuliskan kode. Dengan framework developer dapat mengurangi jumlah bug pada website atau 
                    aplikasi yang dibuat. Hal tersebut dikarenakan fungsi dan variabel sudah tersedia di dalam komponen framework.
                    <ul type="circle">
                        <li><b>Fungsi framework</b>
                            <ul type="disc">
                                <li>Program yang dibuat menjadi lebih terstruktur dan tersusun rapi</li>
                                <li>Praktis untuk developer</li>
                                <li>Memiliki keamanan yang unggul</li>
                                <li>Mempercepat dalam pembuatan website</li>
                                <li>Pemeliharaan dan perawatan website menjadi lebih mudah</li>
                            </ul>
                        </li>
                        <li><b>Jenis framework</b>
                            <ul type="disc">
                                <li>Framework CSS
                                    <ul>
                                        <li>Bootsrap</li>
                                        <li>Semantik UI</li>
                                        <li>Materialze </li>
                                    </ul>
                                </li>

                                <li>Framework javascript
                                    <ul>
                                        <li>AngularJS </li>
                                        <li>ReactJS</li>
                                        <li>VueJS</li>
                                    </ul>
                                </li>

                                <li>Framework PHP
                                    <ul>
                                        <li>CodeIgniter </li>
                                        <li>Laravel </li>
                                        <li>Symfony </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
            </p>
        </li>
        <br>
        
        {{-- soal no 2 --}}
        <li><b> Jelaskan keunggulan menggunakan Laravel Framework </b>
            <ul>
                <li> <b>Template yang ringan</b>
                    <p>Dengan tersedianya template yang ringan membut developer menjadi terbantu dalam membuat website yang powerful. Templatenya pada Laravel juga dapat di custome sesuai keinginan kita. Sehingga berdampak pada efisiensi waktu pembuatan.
                    </p>
                </li>
                <li><b>Library yang lengkap</b>
                    <p>Tidak hanya library yang lengkap Laravel juga menyediakan library yang gratis digunakan oleh developer</p>
                </li>
                <li><b>Menggunakan model MVC</b>
                    <p>Dengan adanya model MVC website yang dibuat akan lebih terstruktur dengan rapi.</p>
                </li>
                <li><b>Tool artisan</b>
                    <p>Tool ini berfungsi agar website yang dikembangkan dapat berinteraksi dengan framework lain yang digunakan saat membuat website dengan bantuan command line. </p>
                </li>
                <li><b>Modul bersifat individu dan independen</b>
                    <p>Modul library dapat digunakan untuk individu dan independent membuat aplikasi yang dihasilkan lebih powerfull.</p>
                </li>
                <li><b>Dokumentasi lengkap</b>
                    <p>Laravel memiliki dokumentsi yang lengkap, rapi mudah dan jelas sehingga dapat memudahkan kita untuk belajar Laravel dari dokumentsanya saja.</p>
                </li>
                <li><b>Forum dan komunitas</b>
                    <p>Forum dan komunitas memungkinkan kita untuk dapat mudah belajar dan mencari solusi dari permasalahan yang dialami selama menggunakan Laravel </p>
                </li>
                <li><b>Fitur</b>
                    <p>Laravel menyediakan fitur yang tidak disediakan oleh framework lainnya sehingga dapat membuat website yang lebih mudah dan efisien.</p>
                </li>
                <li><b>Open source</b>
                    <p>Laravel adalah framework open source yang dapt digunakan oleh semua orang</p>
                </li>
            </ul>
        </li>
        <br>

        {{-- soal no 3 --}}
        <li><b> Jelaskan mengenai konsep MVC dalam pemrograman Laravel </b>
            <p>MVC merupakan konsep arsitektur pada pembangunan aplikasi berbasis web dengan membagi aplikasi menjadi 3 bagian besar yaitu model, view dan controller:</p>
                <ul>
                    <li><b>Model</b>
                        <p>Bertugas untuk mengatur, menyiapkan, memanipulasi dan mengorganisir data (dari database) sesuai instruksi dari controller. Model berhubungan langsung dengan database.</p>
                    </li>
                    <li><b>View</b>
                        <p>Bertugas untuk menyiapkan informasi kepada user (interface) sesuai dengan instruksi dari controller. View dapat dikatakan sebagai halaman web.</p>
                    </li>
                    <li><b>Controller</b>
                        <p>Bertugas untuk mengatur atau menjembatani apa yang harus dilakukan antara mode dan view. Controller juga disebut sebagai alur logika program. </p>
                    </li>
                </ul>
        </li>
    </ol>
    </div>
</div>
@endsection