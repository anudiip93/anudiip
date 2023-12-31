<template>
  <img alt="Vue logo" src="./assets/logo.png">
 
  <!-- <a href="./components/Home.vue">Home</a>
  <a href="./components/Products.vue">Products</a>
  <a href="./components/ContactUs.vue">Contact Us</a> -->

 <router-link to="/">Home Page</router-link>
 <router-link to="/product">Products</router-link>
 <router-link to="/contact">Contact Us</router-link>
 <router-view></router-view>

</template>

<script>
import { RouterLink } from 'vue-router';


export default {
  name: 'App',
  components: {
    
    RouterLink
}
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
