<template lang="">
  <div>
    <Map />
  </div>
</template>

<script>
import { onMounted, ref, computed, watch } from "vue";
import Map from "../components/Map.vue";

export default {
  props: {
    piData: Object,
  },
  components: {
    Map,
  },
  setup(props) {
    onMounted(() => {});

    // New Map Coordinates watcher
    window.Echo.channel("piData").listen("SendPiData", (newPiData) => {
      console.log(newPiData);
    });
  },
};
</script>
