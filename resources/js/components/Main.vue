<template>
<div>
  <h1>Welcome to showoff.vue!</h1>
  <button class="btn btn-primary" @click="getUser()">GET USER</button>
  <h3>USER_NAME:{{ name }}</h3>
</div>
</template>
<script>
export default {
  data () {
    return {
      name: ''
    };
  },
  methods: {
    getUser () {
      axios.get('/api/test').then((res) => {
        this.name = res?.data?.name;
      }).catch((err) => {
        console.error(err);
      })
    }
  }
}
</script>