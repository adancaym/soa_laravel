<template>
<div class="row">
    <div class="col-12">
        <admin-users @updateList="updateList" :users="usersAccount"></admin-users>
    </div>
</div>
</template>

<script>
    export default {
        name: "administracion-usuarios",
        mounted() {
            axios.get('isAdmin').then(response=>{
                this.isAdmin = response.data.isAdmin
            });
            this.updateList();

        },
        data(){
            return {
                isAdmin:false,
                usersAccount:[],
            }
        },
        methods:{
            updateList(){
                axios.get('api/users').then(response=>{
                    this.usersAccount = response.data.usersAccount;
                    console.log(this.usersAccount);
                })
            }
        }
    }
</script>

<style scoped>

</style>
