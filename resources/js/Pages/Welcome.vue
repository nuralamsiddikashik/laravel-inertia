<template>
	<layout>
		<div>Welcome Vue Page</div>
	</layout>
</template>



<script>
import Layout from "../Shared/Layout";
export default {
	props: ["foo"],
	components: {
		Layout
	}
};
</script>