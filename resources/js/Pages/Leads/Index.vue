<template>
	<layout>
		<div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 offset-md-12">
						<div class="card">
							<div class="card-body">
								<table class="table table-stripd">
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Name</th>
											<th scope="col">Description</th>
											<th scope="col">Edit</th>
											<th scope="col">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr v-for="lead in leads" :key="lead.id">
											<td>{{ lead.id }}</td>
											<td>{{ lead.name }}</td>
											<td>{{ lead.desc }}</td>
											<td>
												<inertia-link :href="`/leads/${lead.id}/edit`"
													>Edit</inertia-link
												>
											</td>
											<td>
												<button
													type="submit"
													class="btn btn-danger"
													@click="deleteUser(lead.id)"
												>
													Delete
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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
	props: ["leads"],
	components: {
		Layout
	},
	methods: {
		deleteUser(id) {
			if (confirm("Are you sure delete the user")) {
				this.$inertia.delete(`/leads/delete/${id}`);
			}
		}
	}
};
</script>