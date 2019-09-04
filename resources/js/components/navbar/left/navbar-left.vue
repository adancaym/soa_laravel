<template>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
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
