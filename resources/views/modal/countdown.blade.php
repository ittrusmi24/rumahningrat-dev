<link rel="stylesheet" href="{{ asset('assets/css/datatable/dataTables.bootstrap5.css') }}">

<style>
    .countdown-box {
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 12px;
        padding: 12px 20px;
        min-width: 70px;
        text-align: center;
        font-size: 38px;
        font-family: 'Courier New', monospace;
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); */
    }

    .countdown-separator {
        font-size: 38px;
        color: white;
        opacity: 0.8;
        padding: 0 5px;
    }
</style>


<div class="modal fade" id="modal_countdown" aria-labelledby="modal_countdownLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content rounded-4">
            <div class="modal-body p-0 m-0 position-relative overflow-hidden" 
                 style="height: 550px; background-image: url('https://www.imageshine.in/uploads/gallery/Blue-Wallpaper-With-dotted-texture-background-Wallpaper.jpg'); background-size: cover; background-position: center;">
                
                <!-- Wrapper full tinggi, pusatkan konten -->
                <div class="d-flex flex-column justify-content-center align-items-center text-center text-white w-100 h-100 px-4" 
                     style="background-color: rgba(0, 0, 0, 0.4);">
                    <img src="{{asset('/assets/images/')}}/peringatan.jpg" alt="" class="mb-2" style="max-height: 250px;">
                    <!-- Judul -->
                    <h2 class="mb-2 fw-bold text-white">INFO PENTING!</h2>

                    <!-- Subjudul -->
                    <h6 class="mb-4 text-white">Harga akan berubah sesuai dengan ketentuan memo yang berlaku dalam waktu:</h6>
                    <div class="d-flex justify-content-center align-items-center gap-2 fw-bold" style="font-size: 38px;">
                        <div class="countdown-box" id="cd-hour">00</div>
                        <div class="countdown-separator">:</div>
                        <div class="countdown-box" id="cd-minute">00</div>
                        <div class="countdown-separator">:</div>
                        <div class="countdown-box" id="cd-second">00</div>
                    </div>
                    <button type="button" class="mt-4 btn rounded-4 btn-primary" data-bs-dismiss="modal">Oke, Mengerti!</button>

                </div>
            </div>
        </div>
    </div>
</div>
