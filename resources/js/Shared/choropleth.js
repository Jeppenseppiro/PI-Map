const PASAR = [
  {
    type: "Feature",
    properties: {
      name: "Smelter",
    },
    geometry: {
      type: "Polygon",
      coordinates: [
        [
          [124.43447962, 10.8925611],
          [124.43447158, 10.89247023],
          [124.43447158, 10.89247023],
          [124.43450108, 10.89229376],
          [124.43548411, 10.89228586],
          [124.43549618, 10.89221474],
          [124.4360581, 10.89222133],
          [124.4360581, 10.89222133],
          [124.43601519, 10.89278366],
          [124.43536744, 10.89276654],
          [124.43534732, 10.89257427],
        ],
      ],
    },
  },
];

function getColor(d) {
  return d > 1000
    ? "#800026"
    : d > 500
    ? "#BD0026"
    : d > 200
    ? "#E31A1C"
    : d > 100
    ? "#FC4E2A"
    : d > 50
    ? "#FD8D3C"
    : d > 20
    ? "#FEB24C"
    : d > 10
    ? "#FED976"
    : "#FFEDA0";
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.density),
    weight: 2,
    opacity: 1,
    color: "white",
    dashArray: "3",
    fillOpacity: 0.7,
  };
}

export { PASAR, style };
