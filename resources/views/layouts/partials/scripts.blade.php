 <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>



<script>
jQuery(document).ready(function($){
    $('#province1').change(function(){
    var selected = $('#province1 option:selected');
    window.alert(selected.val());
      $.get("{{ route('municipalities.show', 'selected.val()' )}}", 
        { option: $(this).val() }, 
        function(data) {
          var muminicpalities = $('#municipalities1');
          municipalities.empty();
 
          $.each(data, function(index, element) {
                  municipalities.append("<option value='"+ element.id +"'>" + element.name + "</option>");
              });
        });
    });
  });
</script>

 
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->


