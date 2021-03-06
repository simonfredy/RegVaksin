<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <title>Registrasi Vaksin RSBM</title>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuresponsive" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuresponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <button href="#" class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#pengumuman">Tata Cara Pendaftaran</button>
                    </li>
                    <li class="nav-item">
                        <button href="#" class="btn btn-success">Cek Pendaftaran</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h1>Registrasi Vaksin Rumkit Bhayangkara TK.II Medan</h1>
                <p class="text-muted">Harap diisi untuk mendaftar vaksin</p>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="form-group mt-2">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik">
                        <small class="form-text text-muted">Masukkan NIK sesuai dengan KTP-Eletronik Anda</small>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        <small class="form-text text-muted">Masukkan Nama sesuai dengan KTP-Eletronik Anda</small>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" name="jeniskelamin" id="lakilaki" class="form-check-input" value="LakiLaki">
                            <label for="lakilaki" class="form-check-label">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jeniskelamin" id="perempuan" class="form-check-input" value="Perempuan">
                            <label for="perempuan" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="text" name="tanggallahir" class="form-control datepicker">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" name="nama" id="umur" disabled>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="alamat">Alamat</label>
                        <textarea name="" id="alamat" cols="3"class="form-control"></textarea>
                        <small class="form-text text-muted">Masukkan Alamat sesuai dengan KTP-Eletronik Anda</small>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="nohp">Nomor Handphone</label>
                        <input type="text" class="form-control" name="nohp" id="nohp">
                        <small class="form-text text-muted">Masukkan Nomor Handphone yang bisa terima SMS</small>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <small class="form-text text-muted">Masukkan Email Valid</small>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="kerja">Pekerjaan</label>
                        <input type="text" class="form-control" name="kerja" id="kerja">
                    </div>
        
        
                    <div class="form-group mt-2">
                        <label for="statusbpjs">Status Keanggotaan BPJS</label>
                        <div class="form-check">
                            <input type="radio" name="dibayarpemerintah" id="dibayarpemerintah" class="form-check-input" value="dibayarpemerintah">
                            <label for="dibayarpemerintah" class="form-check-label">Dibayar Pemerintah</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="dibayarperusahaan" id="dibayarperusahaan" class="form-check-input" value="dibayarperusahaan">
                            <label for="dibayarperusahaan" class="form-check-label">Dibayar Perusahaan / Institusi</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="bayarmandiri" id="bayarmandiri" class="form-check-input" value="bayarmandiri">
                            <label for="bayarmandiri" class="form-check-label">Pembayaran Mandiri</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="tidakadabpjs" id="tidakadabpjs" class="form-check-input" value="tidakadabpjs">
                            <label for="tidakadabpjs" class="form-check-label">Tidak Memiliki BPJS</label>
                        </div>
                    </div>
        
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
        
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fate" id="pengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petunjuk Pengisian Formulir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    1. Vaksinasi diadakan di tendan vaksin. <br>
                    2. Vaksin yang tersedia sebanyak 5 vial (untuk 50 orang) <br>
                    3. Diharapkan datang tepat Waktu <br>
                    4. Membawa alat tulis masing - masing <br>
                    5. Mengisi data yang tersedia sesuai dengan data di KTP Eletronik
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>




    
    <!-- JS -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>