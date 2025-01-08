<div class="modal fade" id="modalDetailLokasi" aria-labelledby="modalDetailLokasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded-4">
            <div class="modal-body modal-body p-0 m-0">
                <div class="container-fluid p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="p-0 m-0 col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <style>
                                #map_lokasi {
                                    height: 400px;
                                }
                            </style>
                            <div id="map_lokasi"></div>
                        </div>
                        <div class="p-0 m-0 col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="video">
                                <iframe id="video_presentation" width="100%" height="200" src=""
                                    title="Rumah Ningrat" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="ps-4 pe-4 pt-2">
                                <h5>{{ $project['title_satu'] }}</h5>
                                <h5>{{ $project['title_dua'] }}</h5>
                                <p class="pt-2 pb-2 mb-2 mb-2">{{ $project['alamat'] }}</p>
                                <button type="button" class="btn btn-secondary float-end mb-4"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
