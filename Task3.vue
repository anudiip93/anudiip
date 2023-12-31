<template>
  <img alt="Vue logo" src="./assets/logo.png" />
  <div id="app">
    <h1>Checkout form</h1>
    <form @submit.prevent="submitForm">
      <div class="form-group">
        <label for="Name">Name</label>
        <input v-model="FormData.name" type="text" id="name" required>
      </div>
      <div class="form-group">
        <label for="Email">Email</label>
        <input v-model="FormData.email" type="text" id="email" required>
      </div>
      <div class="form-group">
        <label for="Address">Shipping Address</label>
        <textarea v-model="FormData.address" type="text" id="address" required></textarea>
      </div>
      <div class="form-group">
        <label for="Credit Card">Credit Card</label>
        <input v-model="FormData.creditCard" type="text" id="creditcard" required>
      </div>
      <div class="form-group">
        <label for="Product">Product</label>
        <input v-model="FormData.product" type="text" id="product" required>
      </div>
      <div class="form-group">
        <label for="Quantity">Quantity</label>
        <input v-model="FormData.creditCard" type="text" id="creditcard" required>
      </div>  

      <button type="submit">Submit order</button>
    </form>
    <div v-if="orderSubmitted">
      <h2>Order submitted!</h2>
      <p><strong>Name:</strong> {{ FormData.name }}</p>
      <p><strong>Email</strong> {{ FormData.email }}</p>
      <p><strong>Shipping Address</strong>{{ FormData.address }}</p>
      <p><strong>Credit Card#</strong>{{ FormData.creditCard }}</p>
    </div>
  </div>    
</template>
<script>
export default {
  name: 'App',
  data(){
    return{
      FormData:{
        name:'',
        email:'',
        address:'',
        creditCard:'',
      },
      orderSubmitted: false,
    }
  },
  methods:{
    submitForm(){
      this.orderSubmitted = true;
    }
  }
}
</script>


<style>
label{
  display: block;
  margin-bottom: 3px;
}
input, textarea{
  width: 100%;
  padding: 10px;
  font-size: 15px;
  margin-bottom: 10px;
}
button{
  padding: 15px;
  font-size: 15px;
  background-color: blue;
  color: white;
  border: none;
  cursor: pointer;
}

</style>
