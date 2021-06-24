    @if (session('success'))
        <script>
              toastr.clear();
                NioApp.Toast('<h5>Successfully!</h5><p>{{ session("success") }}.</p>', 'success');
        </script>


    @elseif(session('error'))

        <script>
                toastr.clear();
                    NioApp.Toast('{{ session("error") }}', 'error');
        </script>

        
    @endif


   