<template>

<div id="app">
<h1>Menu List</h1>
<table>
<tr>
 <th>Id</th>
 <th>Email</th>
 <th>First Name</th>
 <th>Last Name</th>
 </tr>
 <tr class="item" v-for="item in list" :key="item.id">

 <td>{{ item.id }}</td>
<td>{{ item.email}}</td>
 <td>{{ item.first_name}}</td>
<td>{{ item.last_name}}</td>
 <td><img :src="item.avatar"/></td>
 </tr>

</table>
</div>

</template>

<script>

import axios from "axios";
export default {
name: 'App',
data(){
return{
list :[]
 }
},
async mounted(){
let result = await axios.get("https://reqres.in/api/users?page=1");
console.warn(result.data.data);
this.list = result.data.data;
}
};

// export default {
//         name:'ProductsPage',
// }


</script>

<style>


</style>