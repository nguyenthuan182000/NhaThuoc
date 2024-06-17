<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="text-center">
            <h2 class="title-login">Đăng nhập</h2>
            <p class="text-login mb-4">Vui lòng đăng nhập để hưởng những đặc quyền dành cho thành viên.
            </p>
        </div>
        <form class="mb-4">
            <div class="wrapper-form-login">
                <input type="gmail" class="form-control mb-4" placeholder="Vui lòng nhập địa chỉ gmail">
                <button class="btn btn-primary btn-login">Đăng nhập</button>
            </div>
        </form>

        <div class="wrapper-register mb-4">
            <div class="register">
                <div class="line"></div>
                hoặc đăng ký <a class="link-register" data-bs-toggle="modal" data-bs-target="#modalRegister">Tại
                    đây</a>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <img src="{{ asset('frontend/images/auth-modal-footer.svg') }}" alt="Logo-footer-login">
    </div>
</div>