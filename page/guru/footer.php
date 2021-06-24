<script src="../../assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/jquery.dataTables.min.js"></script>
<script src="../../assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/js/scripts.js"></script>
<script>
    // Data table
    $(document).ready(function() {
        $("#dataTable").DataTable();
    });

    // Animation Massage
    window.setTimeout(function() {
        $(".alert").slideUp("slow");
    }, 5000);

    // Loading
    $(window).on('load', function() {
        $(".preloader").fadeOut("slow");
    });
</script>