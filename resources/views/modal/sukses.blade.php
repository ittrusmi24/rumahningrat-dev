<div class="modal fade" tabindex="-1" id="modalSukses">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="border: none !important;">
                <h5 class="modal-title">&nbsp;</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h1>Berhasil!</h1>
                            <p><strong>Permintaan Booking kamu di {{ $project['title_satu'] }}
                                    {{ $project['title_dua'] }} sudah kami
                                    terima.</strong></p>
                            <p>Sedikit lagi Kamu bisa menjadi bagian dari Keluarga Ningrat.</p>

                            <p>Ayo lakukan pembayaran Booking Fee sebelum <span id="expired_time">6 Januari
                                    14:30:00</span> agar kita bisa sama-sama
                                merasakan Hidup Lebih Baik!</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('/assets/images/modal/sukses.png') }}" alt="image sukses"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-3 col-12">
                            <a href="" id="bayarGci" class="btn btn-primary btn-sm">Bayar Sekarang <img
                                    src="{{ asset('/assets/images/icon/undo.png') }}" alt=""></a>
                        </div>
                        <div class="col-lg-9 col-12">
                            <a href="https://punyarumah.rumahningrat.com/login" class="btn btn-sm"
                                style="border: 1px solid #005991;">Cek Hasil BIC dan
                                Progress Rumahmu di Ningrat
                                Apps <img src="{{ asset('/assets/images/icon/undo.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
