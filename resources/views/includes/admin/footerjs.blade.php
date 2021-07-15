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


<script>
    function deleteData(val, id){

        $('#'+val+id).click();
    }
</script>

</body>

</html>



