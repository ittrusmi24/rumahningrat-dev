<script>
    const chatDropdownElement = document.getElementById('chatNira');
    const chatDropdown = new bootstrap.Dropdown(chatDropdownElement);
    const chatlist = $('#chat-list');
    let getSectionId = 0
    let getSectionIdSub = 0
    let getSectionIdJawaban = 0
    let getSectionIdSesi = 0

    function newChat() {
        $.ajax({
            url: `{{ url('/chat/kategori') }}`,
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                const categories = response.data
                // chatlist.empty();
                // chatlist.append(`<div class="row mt-2 left-chat">
                //          <div class="col-12">
                //              <div class="chat-block">
                //                  <div class="row">
                //                      <div class="col">
                //                          How can we help?
                //                      </div>
                //                  </div>
                //              </div>
                //          </div>
                //      </div>`);
                const currentSectionId = `categori-${++getSectionId}`;
                const sectionCategory = $(
                    `<div id="${currentSectionId}" class="section-category"></div>`)
                chatlist.append(sectionCategory);

                categories.forEach(category => {
                    const optionSection = $(`<div class="row mt-1 mb-0 right-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                         <span class="option-categori" data-idCategory="${category.id_kategori}">${category.kategori}</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`)
                    sectionCategory.append(optionSection);
                })
            }
        });
    }

    $(document).ready(function() {
        newChat();

        // Tambahkan event click pada tombol btn-close-nira
        $('#btn-close-nira').on('click', function() {
            chatDropdown.hide(); // Menutup dropdown
        });
    });

    // Tambahkan event listener untuk elemen dengan kelas 'option-categori'
    $(document).on('click', '.option-categori', function() {
        let idCategory = $(this).data('idcategory');
        let textCategory = $(this).html();

        $(this).closest('.section-category').addClass('d-none');

        chatlist.append(`<div class="row mt-1 mb-0 right-chat">
                         <div class="col-12">
                             <div class="chat-block">
                                 <div class="row">
                                     <div class="col">
                                         ${textCategory}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`);

        const currentSectionId = `subCategori-${++getSectionIdSub}`;
        const sectionSubCategory = $(
            `<div id="${currentSectionId}" class="section-subCategory"></div>`)
        chatlist.append(sectionSubCategory);

        $.ajax({
            url: `{{ url('/chat/sub_kategori') }}`,
            type: 'POST',
            data: JSON.stringify({
                id_kategori: idCategory
            }), // Serialisasi data menjadi JSON
            dataType: 'json',
            processData: false, // Nonaktifkan pemrosesan otomatis
            contentType: 'application/json', // Pastikan data dikirim sebagai JSON
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                    'content') // Token CSRF untuk keamanan
            },
            success: function(response) {
                const subcategories = response.data
                subcategories.forEach(subcategory => {
                    const subcategorySection = $(`<div class="row mt-1 mb-0 right-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                         <span class="option-sub-categori" data-idSubKategori="${subcategory.id_sub_kategori}">${subcategory.sub_kategori}</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`)

                    sectionSubCategory.append(subcategorySection);
                })
            }
        });

    });

    $(document).on('click', '.option-sub-categori', function() {
        let idSubKategori = $(this).data('idsubkategori');
        let textSubKategori = $(this).html();

        $(this).closest('.section-subCategory').addClass('d-none');
        chatlist.append(`<div class="row mt-2 right-chat">
                         <div class="col-12">
                             <div class="chat-block">
                                 <div class="row">
                                     <div class="col">
                                         ${textSubKategori}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`);

        const currentSectionId = `jawaban-${++getSectionIdJawaban}`;
        const sectionJawaban = $(`<div id="${currentSectionId}" class="section-jawaban"></div>`)

        $.ajax({
            url: `{{ url('/chat/jawaban') }}`,
            type: 'POST',
            data: JSON.stringify({
                id_sub_kategori: idSubKategori
            }), // Serialisasi data menjadi JSON
            dataType: 'json',
            processData: false, // Nonaktifkan pemrosesan otomatis
            contentType: 'application/json', // Pastikan data dikirim sebagai JSON
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                    'content') // Token CSRF untuk keamanan
            },
            success: function(response) {
                const jawaban = response.data
                jawaban.forEach(jawab => {
                    const jawabanSection = $(`<div class="row mt-1 mb-0 left-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block">
                                 <div class="row">
                                     <div class="col">
                                         ${jawab.jawaban}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`)

                    const offering = $(`<div class="row mt-2 mb-0 left-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block">
                                 <div class="row">
                                     <div class="col">
                                         Apakah anda berminat untuk Booking ?
                                         <div class="d-grid p-2">
                                         <button type="button" class="btn btn-light btn-sm border offeringBook">Booking sekarang</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`)

                    chatlist.append(jawabanSection);
                    chatlist.append(offering);
                })

                chatlist.append(sectionJawaban);
                const opsiNewChat = $(`<div class="row mt-1 mb-0 right-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                         <span class="option-chat" data-chat="1" >Masih membutuhkan bantuan</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row mt-1 mb-0 right-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                         <span class="option-chat" data-chat="2" >Chat dengan Asisten Nira</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row mt-1 mb-0 right-chat animate__animated animate__fadeIn">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                         <span class="option-chat" data-chat="0" >End Chat</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`)
                sectionJawaban.append(opsiNewChat)
            }
        });
    })

    function renderCekatAI() {
        const urlai = `{{ url('/assets/js/') }}/chatai.js`; // URL script widget
        window.mychat = window.mychat || {};
        window.mychat.server = urlai;
        window.mychat.iframeWidth = '300px';
        window.mychat.iframeHeight = '70vh';
        window.mychat.accessKey = 'Trusmi-lgeisqBy';

        (function() {
            var mychat = document.createElement('script');
            mychat.type = 'text/javascript';
            mychat.async = true;
            mychat.src = window.mychat.server;

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(mychat, s);
        })();
    }

    // opsi new chat
    $(document).on('click', '.option-chat', function() {
        let idJawaban = $(this).data('chat');
        let textOpsiJawab = $(this).html();

        $(this).closest('.section-jawaban').addClass('d-none');

        chatlist.append(`<div class="row mt-2 right-chat">
                         <div class="col-12">
                             <div class="chat-block">
                                 <div class="row">
                                     <div class="col">
                                         ${textOpsiJawab}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`);
        const currentSectionId = `sesi-${++getSectionIdSesi}`;
        const sectionSesi = $(
            `<div id="${currentSectionId}" class="section-sesi-chat"></div>`)
        chatlist.append(sectionSesi);
        if (idJawaban == 1) {
            newChat()
        } else if (idJawaban == 2) {
            renderCekatAI();

            setTimeout(() => {
                $('.chatboxes').hide();
            }, 300);
        } else {
            sectionSesi.append(`
            <div class="row mt-2 left-chat">
                     <div class="col-12">
                         <div class="chat-block">
                             <div class="row">
                                 <div class="col">
                                     Ingin chat sesi baru?
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            <div class="row mt-2 right-chat">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                        <span class="option-session-chat" data-chat="1" >Ya</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row mt-2 right-chat">
                         <div class="col-12">
                             <div class="chat-block opsi">
                                 <div class="row">
                                     <div class="col">
                                        <span class="option-session-chat" data-chat="2" >Tidak</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>`);
        }
    })

    $(document).on('click', '.option-session-chat', function() {
        let idSesi = $(this).data('chat');
        $(this).closest('.section-sesi-chat').addClass('d-none');

        if (idSesi == 1) {
            chatlist.empty();
            chatlist.append(`<div class="row mt-2 left-chat">
                     <div class="col-12">
                         <div class="chat-block">
                             <div class="row">
                                 <div class="col">
                                    Bagaimana kami bisa membantu?
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>`)
            newChat()
        } else {
            chatlist.append(`<div class="row mt-2 left-chat">
                     <div class="col-12">
                         <div class="chat-block">
                             <div class="row">
                                 <div class="col">
                                    Terimakasih!
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>`)
        }
    })

    $(document).on('click', '.offeringBook', function() {
        $('#nama').focus()
        chatDropdown.hide();
    })
</script>
