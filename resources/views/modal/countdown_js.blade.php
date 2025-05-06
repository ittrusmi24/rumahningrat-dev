<script src="{{ asset('assets/js/datatable/dataTables.js') }}"></script>
<script src="{{ asset('assets/js/datatable/dataTables.bootstrap5.js') }}"></script>
<script>
    function modal_countdown() {
        $('#modal_countdown').modal('show');
        const countdownEl = $('#countdown');

        function updateCountdown() {
            const now = new Date();
            const target = new Date();
            target.setHours(24, 0, 0, 0);

            if (now > target) {
                target.setDate(target.getDate() + 1);
            }

            const diff = target - now;

            if (diff <= 0) {
                $('#cd-hour').text('00');
                $('#cd-minute').text('00');
                $('#cd-second').text('00');
                return;
            }

            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            $('#cd-hour').text(String(hours).padStart(2, '0'));
            $('#cd-minute').text(String(minutes).padStart(2, '0'));
            $('#cd-second').text(String(seconds).padStart(2, '0'));
        }

        updateCountdown(); // first run immediately
        setInterval(updateCountdown, 1000); // then update every second
    }

</script>