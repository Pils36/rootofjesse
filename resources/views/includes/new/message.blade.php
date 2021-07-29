    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('success'))
        <script>
              swal("Excellent!", "{{ session('success') }}", "success");
        </script>

    @elseif(session('error'))

        <script>
                swal("Oops!", "{{ session('error') }}", "error");
        </script>

    @endif


   