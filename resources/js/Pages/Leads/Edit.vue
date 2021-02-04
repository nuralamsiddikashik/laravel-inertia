<template>
	<layout>
		<div class="container">
			<div class="row">
				<div class="col-6 offset-md-3">
					<div class="card">
						<div class="card-body">
							<form action="#" method="PUT" @submit.prevent="updateUser">
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
									Update User
								</button>
							</form>

							<!-- <button type="submit" @click="deleteUser" class="btn btn-success">
								Delete User
							</button> -->
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
	props: ["lead"],
	components: {
		Layout
	},
	data() {
		return {
			form: {
				name: this.lead.name,
				desc: this.lead.desc
			}
		};
	},
	methods: {
		updateUser() {
			this.$inertia.put(`/leads/${this.lead.id}`, this.form).then(() => {});
		}
	}
};
</script>