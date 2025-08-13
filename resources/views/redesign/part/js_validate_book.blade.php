<script>
$(document).ready(function() {

    // Menambahkan metode validasi kustom untuk nomor HP Indonesia
    $.validator.addMethod("indonesianPhone", function(value, element) {
        // Regex: harus diawali 08, diikuti 8-12 digit angka
        return this.optional(element) || /^08[0-9]{8,12}$/.test(value);
    }, "Format nomor handphone tidak valid (contoh: 08123456789).");

    $('#form_booking').validate({
        // Aturan untuk setiap input berdasarkan atribut 'name'
        rules: {
            nama: {
                required: true,
                minlength: 3
            },
            no_hp: {
                required: true,
                digits: true, // Hanya boleh angka
                indonesianPhone: true // Menggunakan metode kustom
            },
            tgl_lahir: {
                required: true,
                date: true
            },
            tempat_lahir: {
                required: true
            },
            jenis_kl: {
                required: true
            },
            no_ktp: {
                required: true,
                digits: true,
                minlength: 16,
                maxlength: 16
            },
            kelurahan: {
                required: true
            },
            alamat: {
                required: true,
                minlength: 10
            },
            pekerjaan: {
                required: true,
                minlength: 3
            },
            pendapatan: {
                required: true,
                number: true
            },
            biaya_hidup: {
                required: true,
                number: true
            },
            status: {
                required: true
            }
        },
        // Pesan error kustom dalam Bahasa Indonesia
        messages: {
            nama: {
                required: "Nama lengkap wajib diisi.",
                minlength: "Nama minimal harus 3 karakter."
            },
            no_hp: {
                required: "Nomor handphone wajib diisi.",
                digits: "Harap masukkan nomor handphone yang valid (hanya angka)."
            },
            tgl_lahir: {
                required: "Tanggal lahir wajib diisi.",
                date: "Format tanggal tidak valid."
            },
            tempat_lahir: {
                required: "Tempat lahir wajib diisi."
            },
            jenis_kl: {
                required: "Jenis kelamin wajib dipilih."
            },
            no_ktp: {
                required: "Nomor KTP wajib diisi.",
                digits: "Nomor KTP harus berupa angka.",
                minlength: "Nomor KTP harus 16 digit.",
                maxlength: "Nomor KTP harus 16 digit."
            },
            kelurahan: {
                required: "Kelurahan wajib diisi."
            },
            alamat: {
                required: "Alamat wajib diisi.",
                minlength: "Alamat minimal harus 10 karakter."
            },
            pekerjaan: {
                required: "Pekerjaan wajib diisi.",
                minlength: "Pekerjaan minimal harus 3 karakter."
            },
            pendapatan: {
                required: "Pendapatan wajib diisi.",
                number: "Harap masukkan angka yang valid."
            },
            biaya_hidup: {
                required: "Biaya Hidup wajib diisi.",
                number: "Harap masukkan angka yang valid."
            },
            status: {
                required: "Status pernikahan wajib dipilih."
            }
        },
        // Mengatur bagaimana dan di mana pesan error ditampilkan
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('text-red-500 text-xs'); // Styling error dengan Tailwind
            if (element.prop("type") === "radio") {
                error.insertAfter(element.closest('.grid')); // Tempatkan error setelah grup radio
            // } else if(element.prop('name') === 'pendapatan') {
            //     error.insertAfter(element.closest('.w-1/2')); // Tempatkan error setelah grup radio
                
            // } else if(element.prop('name') === 'biaya_hidup') {
            //     error.insertAfter(element.closest('.w-1/2')); // Tempatkan error setelah grup radio
                
            } else {
                error.insertAfter(element); // Tempatkan error setelah input
            }
        },
        // Fungsi yang akan dijalankan HANYA JIKA semua validasi berhasil
        submitHandler: function(form) {
            console.log("Form valid! Siap untuk dikirim.");

            return false;
        }
    });
});
</script>