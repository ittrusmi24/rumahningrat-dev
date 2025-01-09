<link rel="stylesheet" href="{{ asset('assets/css/datatable/dataTables.bootstrap5.css') }}">

<div class="modal fade" id="modalDekatDengan" aria-labelledby="modalDekatDenganLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded-4">
            <div class="modal-body modal-body p-0 m-0">
                <div class="container-fluid p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="p-0 m-0 col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="vt_view_detail">
                                <iframe src="{{ url('/poi_view') }}" frameborder="0" width="100%"
                                    height="320px"></iframe>
                            </div>
                        </div>
                        <div class="p-0 m-0 col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="header-detail text-center mt-4 mb-4">
                                <h6><b>Dekat Dengan</b></h6>
                            </div>
                            <div class="row m-0 p-0">
                                @foreach ($fasilitasSekitar as $item)
                                    <div class="col-6 mb-2">
                                        <div class="item-tempat p-2">
                                            <div>
                                                @if ($item->category == 'Transportation')
                                                    <i class="fas fa-bus"></i>
                                                @elseif ($item->category == 'Pabrik')
                                                    <i class="fas fa-industry"></i>
                                                @elseif ($item->category == 'Pendidikan')
                                                    <i class="fas fa-school"></i>
                                                @elseif ($item->category == 'Minimarket')
                                                    <i class="fas fa-store"></i>
                                                @elseif ($item->category == 'Instansi')
                                                    <i class="fas fa-building"></i>
                                                @elseif ($item->category == 'Rumah Makan')
                                                    <i class="fas fa-utensils"></i>
                                                @elseif ($item->category == 'Coffe Shop')
                                                    <i class="fas fa-coffee"></i>
                                                @elseif ($item->category == 'Kontrakan')
                                                    <i class="fas fa-home"></i>
                                                @elseif ($item->category == 'Area Publik')
                                                    <i class="fas fa-street-view"></i>
                                                @elseif ($item->category == 'Keuangan')
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                @elseif ($item->category == 'Tempat Ibadah')
                                                    <i class="fas fa-mosque"></i>
                                                @elseif ($item->category == 'Wisata dan Rekreasi')
                                                    <i class="fas fa-umbrella-beach"></i>
                                                @elseif ($item->category == 'Kesehatan')
                                                    <i class="fas fa-heartbeat"></i>
                                                @else
                                                    <i class="fas fa-shopping-bag"></i>
                                                @endif
                                            </div>
                                            <div class="card-text">
                                                {{ $item->jml }} {{ $item->category }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-0 m-0 col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="ps-4 pe-4 pt-2">
                                <div id="loader_table_dekat_dengan" class="placeholder-glow">
                                    <div class="placeholder" style="height: 300px;width:100%;border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="table_dekat_dengan" width="100%"
                                        class="table table-sm table-borderless small text-nowrap">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%">Nama</th>
                                                <th style="width: 50%">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_dekat_dengan">
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-secondary float-end mt-4 mb-4"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
