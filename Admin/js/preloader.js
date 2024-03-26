 // Function to hide the preloader
 function hidePreloader() {
    var preloader = document.getElementById('preloader');
    preloader.style.display = 'none'; // Hide the preloader
}

// Set the duration (in milliseconds) for the preloader to show
var preloaderDuration = 3000; // 3000 milliseconds = 3 seconds

// Set timeout to hide the preloader after the specified duration
setTimeout(hidePreloader, preloaderDuration);