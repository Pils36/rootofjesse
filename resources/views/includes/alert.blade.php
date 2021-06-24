    @if (session('success'))
        <script>
              Swal.fire("Excellent!", "{{ session('success') }}", "success");
        </script>

    @elseif(session('error'))

        <script>
                Swal.fire("Oops!", "{{ session('error') }}", "error");
        </script>

    @endif


   