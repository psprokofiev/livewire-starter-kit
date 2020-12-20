<header id="layout-header" class="pt-3 fixed-top">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light border rounded">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button"
						data-bs-toggle="collapse" data-bs-target="#navbarContent"
						aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarContent">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto">
						@auth
							<li class="nav-item">
								<a class="nav-link" href="#">Profile</a>
							</li>
						@else
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="modal" href="#authModal">Login</a>
							</li>
							@push('modals')
								<x-modal id="auth" title="Login">
									dg5,gl5tnjk
								</x-modal>
							@endpush
						@endauth
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
