
   const openNavMenu = document.querySelector(".open-nav-menu")
   closeNavMenu = document.querySelector(".close-nav-menu")
   navMenu = document.querySelector(".nav-menu")
   menuOverlay = document.querySelector(".menu-overlay");

   openNavMenu.addEventListener("click",toggleNav);
   closeNavMenu.addEventListener("click",toggleNav);
   menuOverlay.addEventListener("click",toggleNav);


   function toggleNav(){
      navMenu.classList.toggle("open");
      closeNavMenu.style.display = "block";
      menuOverlay.classList.toggle("active");
      document.body.classList.toogle("hidden-scrolling")
   }








   
   // //  <script>
        
   //       // Function to toggle the bar
   //       function Zero() {
   //          var x = document.getElementById("menus");
   //          if (x.style.display === "block") {
   //              x.style.display = "none";
   //          } else {
   //              x.style.display = "block";
   //          }
   //      }
    
   //      // Function to toggle the plus menu into minus
   //      function myFunction(x) {
   //          x.classList.toggle("fa-minus-circle");
   //      }
   

  