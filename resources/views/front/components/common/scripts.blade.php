<!-- Core JavaScript
================================================== -->


<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/tether.min.js")}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>

<script src="{{asset("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")}}"></script>
<script src="{{asset("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")}}"></script>


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

