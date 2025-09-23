<!-- Footer-->
<footer class="border-top">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-4 border-right-white-in-mobile"></div>
            </div>
        </div>
        <div class="small text-center text-muted fst-italic">&copy;2025. Institut Teknologi Sepuluh Nopember</div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="dist/js/scripts.js"></script>
<!-- jqueryUI -->
<script src="dist/js/jquery-3.7.1.js"></script>
<script src="dist/js/jquery-ui.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- datatables -->
<script src="dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="dist/js/datatables/dataTables.js" type="text/javascript"></script>
<script src="dist/js/datatables/dataTables.bootstrap5.js" type="text/javascript"></script>
<script src="dist/js/datatables/dataTables.responsive.js" type="text/javascript"></script>
<script src="dist/js/datatables/responsive.bootstrap5.js" type="text/javascript"></script>
<!-- custom js -->
<script>
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: 'yy/mm/dd'
        });
    });
    $(function() {
        $("#datepicker2").datepicker({
            dateFormat: 'yy/mm/dd'
        });
    });
    new DataTable('#example', {
        responsive: true
    });
</script>
</body>

</html>