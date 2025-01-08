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
                            <div class="p-2">
                                <h5>{{ $project['title_satu'] }}</h5>
                                <h5>{{ $project['title_dua'] }}</h5>
                                <p>{{ $project['alamat'] }}</p>
                                <button type="button" class="btn btn-secondary float-right"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4">
            <div class="modal-body modal-body p-0 m-0">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="modal-title">Video Kawasan</h5>
                    </div>
                    <div class="col-md-4" align="right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-body bg-primary" style="padding: 0px;">
                {{-- <div class="video">
                    <iframe id="video_presentation" width="100%" height="281" src="" title="Rumah Ningrat"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div> --}}
            </div>
        </div>
    </div>
</div>
