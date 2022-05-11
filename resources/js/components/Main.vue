<template>
<div>
  <h1>Welcome to showoff.vue!</h1>
  <button class="btn btn-primary" @click="getComponents()">GET COMPONENTS</button>
  <template v-for="(component, index) in components">
    <p :key="`component_title_${index}`">{{ component.title }}</p>
    <p :key="`component_created_by${index}`">{{ component.user_id }}</p>
    <p :key="`component_code${index}`">{{ component.code }}</p>
  </template>
</div>
</template>
<script>
export default {
  data () {
    return {
      components: []
    };
  },
  methods: {
    getComponents () {
      axios.get('/api/components').then((res) => {
        this.components = res?.data;
      }).catch((err) => {
        console.error(err);
      })
    }
  }
}
</script>