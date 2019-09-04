<template>
    <li class="nav-item px-3">
        <a class="nav-link" v-bind:href="element.route" >{{element.system}}</a>
    </li>
</template>

<script>
    export default {
		props: ['element'],
        mounted() {
            console.log('link mounted.')
		},
    }
</script>
