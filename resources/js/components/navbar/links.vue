<template>
	<ul class="nav navbar-nav d-md-down-none">
		<link-navbar v-for="link in links" v-bind:key="link.id" v-bind:element="link" ></link-navbar>
	</ul>
</template>

<script>
    export default {
		props:['links'],
        mounted() {
            console.log('links mounted.')
		}
    }
</script>
