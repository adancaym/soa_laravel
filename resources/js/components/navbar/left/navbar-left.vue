<template>
    <links-navbar :links="links"></links-navbar>
</template>

<script>
    export default {
        mounted() {
            axios.get('host').then(response=>{
                this.title = response.data.host.title_page;
                this.links = response.data.links;
            });
		},
		data(){
			return {
                    title:'',
                    links:[]
			}
		}
    }
</script>
