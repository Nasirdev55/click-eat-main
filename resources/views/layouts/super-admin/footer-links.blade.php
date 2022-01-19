<script src="{{ asset('super-admin-assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('super-admin-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('super-admin-assets/js/style.js') }}"></script>
<script type="text/javascript" src="{{ asset('super-admin-assets/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('super-admin-assets/plugins/DataTables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('super-admin-assets/plugins/DataTables/responsive.bootstrap4.min.js') }}"></script>
<script>
$(document).ready(function(){
    $('#data-table').DataTable({
        responsive: true
    });
})
</script>