<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-pUA-Compatible" content="ie=edge" />
    <title>Star Rating in HTML CSS & JavaScript</title>
    <link rel="stylesheet" href="style1.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   <!-- <script src="script.js" defer></script> -->

   <script defer>
  document.addEventListener("DOMContentLoaded", () => {
    // Select all elements with the "i" tag and store them in a NodeList called "stars"
    const stars = document.querySelectorAll(".stars i");

    // Loop through the "stars" NodeList
    stars.forEach((star, index1) => {
      // Add an event listener that runs a function when the "click" event is triggered
      star.addEventListener("click", () => {
        // Loop through the "stars" NodeList again
        stars.forEach((star, index2) => {
          // Add the "active" class to the clicked star and any stars with a lower index
          // and remove the "active" class from any stars with a higher index
          index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
        });
      });
    });
  });
</script>


   <style>
    /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(45deg, #ffd195, #ffb283);
}
.rating-box {
  position: relative;
  background: #fff;
  padding: 25px 50px 35px;
  border-radius: 25px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
}
.rating-box header {
  font-size: 22px;
  color: #dadada;
  font-weight: 500;
  margin-bottom: 20px;
  text-align: center;
}
.rating-box .stars {
  display: flex;
  align-items: center;
  gap: 25px;
}
.stars i {
  color: #e6e6e6;
  font-size: 35px;
  cursor: pointer;
  transition: color 0.2s ease;
}
.stars i.active {
  color: #ff9c1a;
}
   </style>
  </head>
  <body>
    <div class="rating-box">
      <header>How was your experience?</header>
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
    </div>
  </body>
</html>