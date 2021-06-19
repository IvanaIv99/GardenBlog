<script type="text/javascript" src="{{asset("assets/scripts/main.js")}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/tether.min.js")}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
<script src="{{asset("js/admin-main.js")}}"></script>
