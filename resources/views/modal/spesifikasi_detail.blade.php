<div class="modal fade" id="modalSpesifikasi" aria-labelledby="modalSpesifikasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded-4">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-4">
                            <div id="detail_spesifikasi_denah">

                            </div>
                            {{-- Todo Gambar Denah --}}
                        </div>
                        <div class="col-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 mb-4">
                            <div class="header-detail text-center mb-4">
                                <h6 class="small">Fasilitas</h6>
                            </div>
                            <div id="detail_spesifikasi_fasilitas" class="container-fasilitas">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-4">
                            <div class="header-detail text-center mb-4">
                                <h6 class="small">Poin Plus</h6>
                            </div>

                            <div id="detail_spesifikasi_poin_plus">
                            </div>
                            <div class="header-detail text-center mt-4 mb-4">
                                <h6 class="small">Bekerja Sama Dengan Top Brand</h6>
                            </div>
                            <div class="row">
                                <div class="col-5 col-lg-auto text-center">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img class="ms-4 img-fluid" src="{{ asset('assets/images/dulux.png') }}"
                                                alt="" style="max-height: 70px;">
                                            <p class="text-dark p-0 m-0 small">Top Brand Cat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 col-lg-auto text-center">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img class="ms-4 img-fluid" src="{{ asset('assets/images/sakura.png') }}"
                                                alt="" style="max-height: 70px;">
                                            <p class="text-dark p-0 m-0 small">Top Brand Atap Multiroof</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 col-lg-auto text-center">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img class="ms-4 img-fluid" src="{{ asset('assets/images/tiga_roda.png') }}"
                                                alt="" style="max-height: 70px;">
                                            <p class="text-dark p-0 m-0 small">Top Brand Semen</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 col-lg-auto text-center">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img class="ms-4 img-fluid" src="{{ asset('assets/images/kencana.png') }}"
                                                alt="" style="max-height: 70px;">
                                            <p class="text-dark p-0 m-0 small">Baja Ringan Berkualitas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 mb-4">
                            <div class="header-detail text-center mb-4">
                                <h6 class="small">Spesifikasi Rumah</h6>
                            </div>
                            <div id="detail_spesifikasi_rumah"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
