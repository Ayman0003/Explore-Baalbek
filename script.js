const backgrounds = [
    'images/Baalbek-788x537.jpg.webp',
    'images/baalbeck2.jpg', 
    'images/baalbeck5.jpg',
    'images/baalbeck4.jpg'
  ];
  let currentBackgroundIndex = 0;
  
  function changeBackground() {
    document.querySelector('header').style.backgroundImage = `url(${backgrounds[currentBackgroundIndex]})`;
    currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
  }
  
  // Initial background change
  changeBackground();
  
  // Change the background every 5 seconds
  setInterval(changeBackground, 5000);
  