<script setup>

</script>

<template>
  <main>
    <div class="feedback-container">
      <div v-for="feedback in $store.state.feedback">
        <p>Имя: {{ feedback.name }}</p>
        <p>Обращение: {{ feedback.message }}</p>
      </div>
    </div>
  </main>
</template>

<script>
  export default {
    
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