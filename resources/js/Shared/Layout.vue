<template>
	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">APP</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<inertia-link class="nav-link" href="/">Home</inertia-link>
					</li>
					<li class="nav-item">
						<inertia-link class="nav-link" href="/about">About</inertia-link>
					</li>
					<li class="nav-item">
						<inertia-link class="nav-link" href="/contact"
							>Contact</inertia-link
						>
					</li>
					<li class="nav-item">
						<inertia-link class="nav-link" href="/leads/create"
							>Add Leads</inertia-link
						>
					</li>
					<li class="nav-item">
						<inertia-link class="nav-link" href="/leads">Leads</inertia-link>
					</li>
				</ul>
			</div>
		</nav>
		<main class="py-4">
			<slot />
		</main>
	</div>
</template>

