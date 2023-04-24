<template lang="">
  <div>
    <Map />
  </div>
</template>

<script>
import Map from "../components/Map.vue";
export default {
  props: {
    name: String,
  },
  components: {
    Map,
  },
};
</script>
