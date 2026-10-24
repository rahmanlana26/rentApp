<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout CetakPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Cek Ongkir CetakPro</h5>
                </div>
                <div class="card-body">
                    <form id="formOngkir">
                        @csrf 

                        <div class="mb-3">
                            <label for="destination" class="form-label">Kecamatan/Kabupaten Tujuan</label>
                            <select class="form-control" id="destination" name="destination" required></select>
                        </div>

                        <div class="mb-3">
                            <label for="courier" class="form-label">Pilih Kurir</label>
                            <select class="form-select" id="courier" name="courier">
                                <option value="jne">JNE</option>
                                <option value="sicepat">SiCepat</option>
                                <option value="jnt">J&T Express</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" id="btnCek">Cek Biaya Ongkir</button>
                    </form>
                </div>
            </div>

            <div class="card mt-3 d-none" id="hasilCard">
                <div class="card-body">
                    <h6>Hasil Pengecekan:</h6>
                    <pre id="hasilOngkir" class="bg-dark text-success p-3 rounded" style="font-size: 14px; overflow-x: auto;"></pre>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // 1. Mengaktifkan fitur pencarian lokasi otomatis (AJAX ke Komerce)
        $('#destination').select2({
            placeholder: 'Ketik nama kecamatan/kabupaten (min. 3 huruf)...',
            minimumInputLength: 3,
            ajax: {
                url: '/komerce/cari-lokasi', // Nembak ke route Laravel kamu
                dataType: 'json',
                delay: 250, // Tunggu user selesai ngetik 0.25 detik
                data: function (params) {
                    return { search: params.term };
                },
                processResults: function (data) {
                    // Mengubah format JSON Komerce agar cocok dengan Select2
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                id: item.id,      // ID ini yang akan dikirim saat Cek Ongkir
                                text: item.label  // Ini yang ditampilkan di layar
                            }
                        })
                    };
                }
            }
        });

        // 2. Menangani saat tombol "Cek Biaya Ongkir" diklik
        $('#formOngkir').on('submit', function(e) {
            e.preventDefault(); // Mencegah halaman refresh
            
            let btn = $('#btnCek');
            btn.text('Menghitung...').prop('disabled', true);
            $('#hasilCard').addClass('d-none'); // Sembunyikan hasil lama

            // Mengirim data ID Tujuan dan Kurir ke backend Laravel
            $.ajax({
                url: '/komerce/cek-ongkir',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    btn.text('Cek Biaya Ongkir').prop('disabled', false);
                    $('#hasilCard').removeClass('d-none');
                    
                    // Menampilkan data JSON balasan Komerce secara rapi
                    $('#hasilOngkir').text(JSON.stringify(response, null, 4));
                },
                error: function(xhr) {
                    btn.text('Cek Biaya Ongkir').prop('disabled', false);
                    alert('Terjadi kesalahan saat mengecek ongkir!');
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
</body>
</html>