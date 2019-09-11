<template>
    <tr>
    <td >
        <p v-if="!editMode"  v-on:click="edit">
            {{account.user.name}}
        </p>
        <input type="text" v-model="account.user.name" v-else class="form-control">
    </td>
    <td>
        <p v-if="!editMode"  v-on:click="edit">
            {{account.user.email}}
        </p>
        <input type="text" v-model="account.user.email" v-else class="form-control">
    </td>
    <td>
        persmisos
    </td>
    <td>
        <div class="input-group-prepend" v-if="!editMode">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Acciones
                <span class="caret"></span>
            </button>
            <div class="dropdown-menu ">
                <a class="dropdown-item btn-info" href="#" v-on:click="edit">
                    <i class="fa fa-edit"></i> Editar
                </a>
                <a class="dropdown-item btn-danger" href="#">
                    <i class="fa fa-remove"></i> Eliminar
                </a>
            </div>
        </div>
        <a href="#" v-on:click="save" v-else class="btn btn-primary" ><i class="fa fa-save"></i></a>
    </td>
    </tr>
</template>

<script>
    export default {
        props:['account'],
        data(){
          return {
              editMode:false,
              showRow:false
          }
        },
        methods:{
            edit(event){
                event.preventDefault();
                this.editMode = true;
            },
            save(event){
                event.preventDefault();
                axios.put('api/users/'+this.account.id,this.account.user).then(
                    response=>{
                        this.$emit('updateList');
                        this.editMode = false;
                    }
                );
            }
        },
        name: "row-admin-user"
    }
</script>

<style scoped>

</style>

