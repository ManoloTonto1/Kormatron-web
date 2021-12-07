// this controls the navbar animation
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function open_nav() {
  if (mySidebar.style.display === 'block') {
    document.getElementById("mySidebar").animate([
      // keyframes
      { transform: 'translateX(0px)' },
      { transform: 'translateX(-300px)' }

    ], {
      // timing options
      duration: 250,

    });
    setTimeout(closesidebar, 240);

  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function close_nav() {
  document.getElementById("mySidebar").animate([
    // keyframes
    { transform: 'translateX(0px)' },
    { transform: 'translateX(-300px)' }

  ], {
    // timing options
    duration: 250,

  });
  setTimeout(closesidebar, 240);

}

if(window.innerWidth > 994){
  mySidebar.style.display = 'block';
}
else{
  mySidebar.style.display = "none";
}

function closesidebar(){
  mySidebar.style.display = 'none';
  overlayBg.style.display = "none";
}

