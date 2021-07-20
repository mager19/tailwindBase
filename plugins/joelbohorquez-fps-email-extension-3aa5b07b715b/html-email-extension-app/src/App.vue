<template>
  <v-app>
    <v-content>
      <router-view/>
    </v-content>
  </v-app>
</template>

<script>

export default {
  name: 'App',
  data () {
    return {
      //
    }
  }
}
</script>

<style lang="scss">
// @import "~bootstrap/scss/bootstrap";

  #wpbody-content {
    padding-bottom: 0;
  }

  .theme--light.application {
	background:transparent;
	color: rgba(0,0,0,0.87);
}

body.wp-admin {
  background-color: #f1f1f1;
}

.application--wrap {
	min-height: 90vh;
}
</style>