<template>
	<layout>
		<div class="container">
			<div class="row">
				<div class="col-6 offset-md-3">
					<div class="card">
						<div class="card-body">
							<form action="/leads" method="POST" @submit.prevent="createUser">
								<div class="form-group">
									<label for="name">Name</label>
									<input
										type="text"
										class="form-control"
										id="name"
										v-model="form.name"
									/>
								</div>
								<div class="form-group">
									<label for="desc">Name</label>
									<input
										type="text"
										class="form-control"
										id="desc"
										v-model="form.desc"
									/>
								</div>
								<button type="submit" class="btn btn-success">
									Create User
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</layout>
</template>

<script>
import Layout from "../../Shared/Layout";
export default {
	props: [],
	components: {
		Layout
	},
	data() {
		return {
			form: {
				name: "",
				desc: ""
			}
		};
	},
	methods: {
		createUser() {
			this.$inertia.post("/leads", this.form).then(() => {});
		}
	}
};
</script>