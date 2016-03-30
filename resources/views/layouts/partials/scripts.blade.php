 <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>



<script type="text/javascript">
 
$(document).ready(function(){ 

    $('#province1').on('change', function(e){
        console.log(e);
        var state_id = e.target.value;
        alert(state_id);
        $.get("{{route('municipalities.index')}}",
          { option: $(this).val() }, 
          function(data) {
            $('#municipalities1').empty();
        });
    });
  });
</script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->


