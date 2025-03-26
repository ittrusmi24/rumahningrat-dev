<style>
    .voucher-card {
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
        border: 2px solid transparent;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        background: #ffffff;
        color: #333;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .voucher-card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .voucher-card input[type="radio"] {
        display: none;
    }

    .voucher-card.selected {
        border-color: #007bff;
        box-shadow: 0 6px 25px rgba(0, 123, 255, 0.3);
    }

    .voucher-card .checkmark {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 35px;
        height: 35px;
        background-color: white;
        border: 2px solid #007bff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: transparent;
        transition: background-color 0.3s, color 0.3s;
        z-index: 2;
    }

    .voucher-card.selected .checkmark {
        background-color: #007bff;
        color: white;
    }

    .voucher-card .card-body {
        text-align: center;
        padding: 30px;
        position: relative;
        z-index: 2;
    }

    .voucher-card .card-title {
        font-size: 1.4rem;
        font-weight: bold;
    }

    .voucher-card .card-text {
        font-size: 1rem;
    }
</style>
<div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="promoModalLabel">Syarat dan Ketentuan Promo Tambahan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row py-3">
                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="card voucher-card" onclick="selectVoucher(this)">
                            <input type="radio" name="voucher" value="6">
                            <div class="checkmark">✔</div>
                            <div class="card-body">
                                <h5 class="card-title">Voucher Dapur</h5>
                                <p class="card-text">Up To 10 Juta.</p>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="card voucher-card" onclick="selectVoucher(this)">
                            <input type="radio" name="voucher" value="7">
                            <div class="checkmark">✔</div>
                            <div class="card-body">
                                <h5 class="card-title">Voucher Diskon 50%</h5>
                                <p class="card-text">Up To 6 Juta.</p>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div id="syaratPromo6" class="card-body d-none">
                                <h4 class="fw-bold">Syarat dan Ketentuan Voucher Dapur</h4>
                                <hr class="mt-2 mb-2" style="border: solid 1px;">
                                <ol style="text-align: justify;padding-left: 15px">
                                    <li>Konsumen harus membayar tambahan TK sebesar Rp. 5.000.000, yang harus dilunasi
                                        sesuai ketentuan yang berlaku</li>
                                    <li>Tambahan TK akan di cashback pada bulan ke 13 dengan catatan tidak ada tunggakan
                                        cicilan selama 12 bulan pertama.</li>
                                    <li>Apabila 12 bulan pertama terdapat tunggakan cicilan, maka cashback hangus.</li>
                                    <li>Apabila konsumen reject/mundur/gagal akad tambahan TK akan dikembalikan full
                                        kepada konsumen</li>
                                </ol>
                            </div>
                            <div id="syaratPromo7" class="card-body d-none">
                                <h4 class="fw-bold">Syarat dan Ketentuan Voucher 50%</h4>
                                <hr class="mt-2 mb-2" style="border: solid 1px;">
                                <p style="text-align: justify">Konsumen wajib upload story whastapp 1 minggu
                                    2 kali selama 3 bulan dari konten yang sudah
                                    disiapkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" id="okButtonPromo" disabled>OK</button>
            </div>
        </div>
    </div>
</div>
