 @include('includes.admin.footer')

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- JavaScript -->
<script src="{{ asset('ext/assets/js/bundle.js?ver=2.4.0') }}"></script>
<script src="{{ asset('ext/assets/js/scripts.js?ver=2.4.0') }}"></script>
<script src="{{ asset('ext/assets/js/apps/inbox.js?ver=2.4.0') }}"></script>
<script src="{{ asset('ext/assets/js/libs/tagify.js?ver=2.4.0') }}"></script>
{{-- <script src="{{ asset('ext/assets/js/example-toastr.js?ver=2.4.0') }}"></script> --}}
<script src="{{ asset('ext/assets/js/example-sweetalert.js?ver=2.4.0') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<script>

    $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Compose message',
                tabsize: 2,
                height: 200
            });
        });

    function deleteData(val, id){

        $('#'+val+id).click();
    }
</script>


</body>

</html>



