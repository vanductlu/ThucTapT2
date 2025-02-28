<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row justify-content-center">

			<div class="col-md text-center">
				<!-- Billing Details -->
				<div class="billing-details">

					<div class="section-title">
						<h3 class="title">Đăng nhập</h3>
					</div>
					
					@if(session('error'))
                        <p class="errorMessage">{{ session('error') }}</p>
                    @endif
					
					<form action="./pages-handle/xlDangNhap.php" method="POST">
						<div class="form-group">
							<input class="input-login" type="text" id="username" name="username" placeholder="Tên tài khoản" required>
						</div>
						
						<div class="form-group">
							<input class="input-login" type="password" id="passwordLogin" name="password" placeholder="Mật khẩu" required>
						</div>

						<button type="submit" name="login" class="primary-btn order-submit">Đăng nhập</button>
						<a href="index.php?page=DangKy">Nhấp vào đây để đăng ký tài khoản</a>
					</form>

				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->