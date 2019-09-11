<template>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>
                <div class="card-body table-responsive">
                    <table-admin-users v-if="showTable" @hideTable="hideTable" @updateList="updateList" :users="users"></table-admin-users>
                    <form-new-user v-else @hideTable="hideTable"  @updateList="updateList" ></form-new-user>
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
            console.log('montando admin')
        },
        methods:{
            updateList(){
                this.$emit('updateList');
            },
            hideTable(show){
                console.log('entro');
                this.showTable = show;
            }
        },
        data(){
            return {
                showTable:true
            }
        }


    }
</script>

<style scoped>

</style>
