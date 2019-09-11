<template>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Correo
            </th>
            <th>
                Permisos
            </th>
            <th style="width:10%">
                <a href="" v-on:click="this.hideTable">Nuevo</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <row-admin-user v-for="(user, userID) in this.users"
                        v-bind:key="user.id"
                        :account="user"
                        @updateList="updateList"
        ></row-admin-user>
        </tbody>
    </table>
</template>

<script>

    export default {
        props:['users'],
        name: "table-admin-users",
        methods:{
            updateList(){
                this.$emit('updateList');
            },
            hideTable(event){
                event.preventDefault();
                this.$emit('hideTable',false);
            }
        }
    }
</script>

<style scoped>

</style>
