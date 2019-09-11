<template>
    <form v-on:submit="submit" >
        <div class="form-group text-center">
            <h3>Agregar usuario</h3>
        </div>
        <div class="form-group row">
            <label class="col-2" for="name">Nombre</label>
            <div class="col-10">
                <input class="form-control" id="name" type="text" v-model="user.name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2" for="email">Correo</label>
            <div class="col-10">
                <input class="form-control" id="email" type="email"  v-on:focusout="verifyEmail" v-model="user.email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2" for="email">Contraseña</label>
            <div class="col-10">
                <input class="form-control" id="password" type="password" v-model="user.password">
            </div>
        </div>
        <div class="form-group row">

            <div class="col-12">
                <input class="btn btn-primary form-control"  type="submit">
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: "form-new-user",
        data(){
            return{
                user:{
                    name:'',
                    email:'',
                    password:'',
                }
            }
        },
        methods:{
            submit(event){
                event.preventDefault();
                if (this.user ==='' || this.user.email === '' || this.user.password ===''){
                    this.$toasted.show('Existen campos vacios por favor verifica la información que ingresaste');
                }else{

                    axios.post('api/users',this.user).then(response=>{

                        this.$toasted.show(response.data.mensaje);
                        this.$emit('hideTable',true);
                        this.$emit('updateList',true);

                    }).catch(response=>{
                        this.$toasted.show(response.data.mensaje);
                    });
                }
            },
            verifyEmail(){
                axios.post('api/users/verifyEmail',{email: this.user.email}).then(response=>{
                    if(response.data.exist){
                        this.$toasted.show('El correo ya esta registrado por favor ingresa una nuevo');
                        this.user.email = '';
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>
