<section id="login">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <h3 class="text-danger">
                    Silahkan login
                </h3>
                <div class="card p-4">
                    <div class="my-2 alert-message">
                        <?php Notification::alert(); ?>
                    </div>
                    <form action="<?= BASEURL; ?>/login/check" method="post">
                        <div class="mb-3">
                            <label for="email" class="fw-bold">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="your email.." aria-label="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="fw-bold">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="your password.." aria-label="Password" required>
                        </div>
                        <div class="mb-2 text-end">
                            <a href="#" class="text-primary">Lupa password?</a>
                        </div>
                        <button type="submit" class="btn btn-warning text-white w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        const time = $('.alert-message').text();
        if (time != '') {
            setTimeout(function() {
                $('.alert-message').fadeOut('slow');
            }, 3000)
        }
    })
</script>