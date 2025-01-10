<script>
    const chatlist = $('#chat-list');
    let getSectionId = 0
    let getSectionIdSub = 0
    let getSectionIdJawaban = 0

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

                    chatlist.append(jawabanSection);
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
                                         <span class="option-chat" data-chat="2" >Chat dengan AI</span>
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

    // opsi new chat
    $(document).on('click', '.option-chat', function() {
        let idJawaban = $(this).data('chat');
        let textOpsiJawab = $(this).html();

        $(this).closest('.section-jawaban').addClass('d-none');

        if (idJawaban == 1) {
            newChat()
        } else if (idJawaban == 2) {
            return true;
        } else {
            return false;
        }
    })
</script>
