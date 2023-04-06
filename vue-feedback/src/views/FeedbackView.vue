<script setup>
import axios from "axios"
</script>

<template>
  <main>
    <div class="feedback-container">
      <div class="feedback-field">
        <label for="name">
          Имя
        </label> 
        <input id="name" v-model="name">
      </div>
      <div class="feedback-field">
        <label for="message">
          Обращение
        </label> 
        <input id="message" v-model="message">
      </div>
      <button v-on:click="addFeedback()">
        Отправить
      </button>
    </div>
  </main>
</template>

<script>
  export default {
    data() { return{
      name: null,
      message: null,
    }
  },  
    methods:{
      addFeedback(){
        this.$store.commit('addFeedback', {name: this.name, message: this.message})
        
        axios.defaults.withCredentials = true;
        axios.defaults.headers.common['Content-Type'] = 'application/json';


        axios.post('http://127.0.0.1:8000/api/feedback', {
          name: this.name, message: this.message
        },{
          headers: {
            // 'Content-Type': 'application/json',
          }
        });
      },
      
    }
  }
</script>

<style scoped>
  .feedback-container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 14px;
    padding: 14px;
    color: grey;
    max-width: 401px;
  }
  .feedback-field{
    display: flex;
    justify-content: space-between;
    color: grey;
  }
</style>