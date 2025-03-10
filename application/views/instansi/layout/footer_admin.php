<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Universitas Teuku Umar 2024</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset/vendor/jquery/'); ?>jquery.min.js"></script>
<script src="<?= base_url('asset/vendor/bootstrap/js/'); ?>bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/js'); ?>jsscript.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/vendor/jquery-easing/'); ?>jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/js/'); ?>sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('asset/vendor/datatables/'); ?>jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/vendor/datatables/'); ?>dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/js/demo/'); ?>datatables-demo.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/sweet/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jsscript.js"></script>

<script>
  $('.form-check-input').on('click', function() {
    const akun = $(this).data('akun');
    const prodi = $(this).data('prodi');

    $.ajax({
      url: "<?= base_url('admin/rubahakses'); ?>",
      type: 'post',
      data: {
        akun: akun,
        prodi: prodi
      },
      success: function() {
        document.location.href = "<?= base_url('admin/levelakses/'); ?>" + akun;
      }
    });
  });
</script>

<script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
<script>
  $('#ktp').on('change', function() {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>

</body>

</html>