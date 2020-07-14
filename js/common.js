if (document.querySelector('#map')) {
    // Yandex map
    ymaps.ready(init);
  }
  var myMap, myPlacemark;
  
  function init() {
    myMap = new ymaps.Map("map", {
      center: [55.651699, 37.570564],
      zoom: 15
    });
  
    myPlacemark = new ymaps.Placemark([55.651699, 37.570564], {
      hintContent: 'Москва, улица Херсонская, дом 14'
    });
  
    myMap.geoObjects.add(myPlacemark);
    // Cancel zoom on desktop
    myMap.behaviors.disable('scrollZoom');
    // Cancel zoom on mobile
    myMap.behaviors.disable('drag');
  }