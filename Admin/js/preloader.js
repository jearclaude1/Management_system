 // Function to hide the preloader
 function hidePreloader() {
    var preloader = document.getElementById('preloader');
    preloader.style.display = 'none'; // Hide the preloader
}

// Set the duration (in milliseconds) for the preloader to show
var preloaderDuration = 1000; // 3000 milliseconds = 3 seconds

// Set timeout to hide the preloader after the specified duration
setTimeout(hidePreloader, preloaderDuration);

// function validate(){
//     const form = document.getElementById(form).innerHTML;

//     if(!empty(form)){
//         window.addEventListener(signup){
//             form.display=="none";
//         }
//     }
// }