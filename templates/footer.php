<!--begin::Footer-->
<?php 
if(is_auth_page() == false){?>
<footer class="app-footer">
  <!--begin::To the end-->
  <!--end::To the end-->
  <!--begin::Copyright-->
  <strong>
    Copyright &copy; <?php echo date('Y'); ?>
    <a href="<?php echo $_ENV['APP_URL']; ?>" class="text-decoration-none"><?php echo $_ENV['APP_NAME']; ?></a>.
  </strong>
  All rights reserved.
  <!--end::Copyright-->
</footer>
<?php } ?>
<!--end::Footer-->
<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
  src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
  crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
  crossorigin="anonymous"></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="assets/js/adminlte.min.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->

<!--end::OverlayScrollbars Configure-->
<!--end::Script-->



