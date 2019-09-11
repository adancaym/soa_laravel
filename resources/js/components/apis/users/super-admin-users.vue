<template>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Usuarios administradores
                        </div>
                        <div class="card-body table-responsive">
                            <table-admin-users @updateList="updateList" :users="users"></table-admin-users>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "admin-users",
        props:['users'],
        mounted() {
            console.log('montando super admin')
        },
        methods:{
            updateList(){
                this.$emit('updateList');
            }
        }
    }
</script>

<style scoped>

</style>
