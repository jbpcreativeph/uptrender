<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row vh-100">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">Welcome back!</h1>
						<p class="lead">
							Sign in to your account to continue
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-3">
								<form id="loginForm">
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input class="form-control form-control-lg" type="email" id = "emailaddress" name="emailaddress" placeholder="Enter your email" />
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<input class="form-control form-control-lg" type="password" id = "password" name="password" placeholder="Enter your password" />
									</div>
									<div class="d-grid gap-2 mt-3">
										<button type="submit" class="btn btn-lg btn-primary">Sign In</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="text-center mb-3">
						Don't have an account? <a href="<?= base_url(); ?>register">Sign up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<!-- Bootstrap Modal for Errors -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Login Failed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="errorMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>