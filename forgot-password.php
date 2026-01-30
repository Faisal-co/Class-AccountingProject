<?php 
require_once __DIR__ . '/init.php';
get_header(); 

?>
    <div class="register-box">
        <!-- /.register-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a
                    href="../index2.html"
                    class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"><b>Admin</b>LTE</h1>
                </a>
            </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">Forgot Password</p>
                <form action="../index3.html" method="post">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerFullName" type="text" class="form-control" placeholder="" />
                            <label for="registerFullName">Full Name</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerEmail" type="email" class="form-control" placeholder="" />
                            <label for="registerEmail">Email</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerPassword" type="password" class="form-control" placeholder="" />
                            <label for="registerPassword">Password</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-8 d-inline-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
                
                <!-- /.social-auth-links -->
                <p class="mb-0">
                    <a href="login.html" class="link-primary text-center"> I already have a membership </a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
    <!-- /.register-box -->
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
  <?php get_footer();?>