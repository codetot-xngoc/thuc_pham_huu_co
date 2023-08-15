
<div class="limiter">
    <div class="container-login100">

        <div class="wrap-login100">      
            <div class="login100-pic js-tilt" data-tilt>
               <?php if (isset($alert)) { ?>
                <section class="alert alert-danger"><?=$alert?></section>
            <?php } ?>
            <img src="../images/adm.jpg" alt="IMG">
        </div>
        <!--=====TIÊU ĐỀ======-->
        <section class="login100-form validate-form">
            <span class="login100-form-title">
                <b>ĐĂNG NHẬP ADMIN</b>
            </span>

            <form method="POST" action="?" >
                <div class="wrap-input100 ">
                    <input class="input100" type="text" placeholder="Tài khoản quản trị" name="tk"
                    id="username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='bx bx-user'></i>
                    </span>
                </div>
                <div class="wrap-input100 ">
                    <input autocomplete="off" class="input100" type="password" placeholder="Mật khẩu"
                    name="mk" id="password-field">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='bx bx-key'></i>
                    </span>
                </div>

                <!--=====ĐĂNG NHẬP======-->
                <div class="container-login100-form-btn">
                    <input type="submit" value="Đăng nhập" />
                </div>
                <!--=====LINK TÌM MẬT KHẨU======-->
                <div class="text-right p-t-12">
                    <a class="txt2" href="/forgot.html">
                        Bạn quên mật khẩu?
                    </a>
                </div>
            </form>
            <div class="text-center p-t-70 txt2">
                Phần mềm quản lý bán hàng <i class="far fa-copyright" aria-hidden="true"></i>
                <script type="text/javascript">document.write(new Date().getFullYear());</script> <a
                class="txt2" href="https://www.facebook.com/profile.php?id=100022147272777">FB ))</a>
            </div>

        </section>

    </div>
</div>
</div>