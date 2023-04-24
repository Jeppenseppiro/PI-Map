<template>
  <div class="h-full z-0" id="map"></div>
</template>

<script>
import { onMounted, ref, computed, watch } from "vue";
import { PASAR, style } from "../../Shared/choropleth";
// import { statesData } from "../../Shared/us-states";

export default {
  props: {},
  setup() {
    let map;

    onMounted(() => {
      // Google Satellite tilelayer
      let GoogleSatellite = L.tileLayer(
        "http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
        {
          maxZoom: 20,
          subdomains: ["mt0", "mt1", "mt2", "mt3"],
        }
      );

      // OpenStreetMap Mapnik
      let OpenStreetMap_Mapnik = L.tileLayer(
        "https://tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
          maxZoom: 19,
          attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }
      );

      // Map class initialization
      map = L.map("map", {
        layers: [GoogleSatellite],
        zoomControl: true,
        fullscreenControl: true,
        fullscreenControlOptions: {
          position: "topright",
        },
      }).setView([10.8921361, 124.43710707], 17);

      // Mouseclick coordinates
      let mouseCoordinates = new L.Control.Coordinates({
        position: "bottomright",
      }).addTo(map);
      map.on("click", function (e) {
        mouseCoordinates.setCoordinates(e);
      });

      //Choropleth
      L.geoJson(PASAR, {
        onEachFeature: function (feature, layer) {
          layer.bindPopup(`${feature.properties.name}`);
        },
        style: style,
      }).addTo(map);
    });
  },
};
</script>

<style scoped>
#map {
  height: 750px;
  background-color: bisque;
}
</style>
