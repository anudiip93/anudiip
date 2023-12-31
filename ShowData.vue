<template>

    <h1> Input form 3 fields </h1>
    <br>
    <input type="text" placeholder="Input 1" v-model="input1"/>
    <br>
    <br>
    <input type="text" placeholder="Input 2" v-model="input2"/>
    <br>
    <br>
    <input type="text" placeholder="Input 3" v-model="input3"/>
    <br>
    <br>
    <button v-on:click="getData"> Submit </button>
    <br>

    <ul v-if="submitted">
      <li>Input 1: {{ input1 }}</li>
      <li>Input 2: {{ input2 }}</li>
      <li>Input 3: {{ input3 }}</li>
    </ul>


</template>

<script>

    export default {

        name: "ShowData",

        data(){

            return {
                input1:null,
                input2:null,
                input3:null,
                submitted: false,
            }
        },

        methods:{
            getData(){
                this.submitted=true;
            }
        }


    }

</script>

<style scoped>



</style>