import { createApp } from 'vue'
import { createStore } from 'vuex'
import App from './App.vue'
import router from './router'

import './assets/main.css'

const store = createStore({
    computed:{

    },
    
    state () {
      return {
        count: 0,
        feedback: [],
      }
    },
    mutations: {
      increment (state) {
        state.count++
      },
      addFeedback(state, data){
        state.feedback.push(data)
      }
    },
    
  })

const app = createApp(App)

app.use(store)
app.use(router)

app.mount('#app')
