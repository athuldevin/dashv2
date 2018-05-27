<html>
<head>
  <link rel="stylesheet" href="../assets/css/style2.css">
</head>
<body>
  <main>
       <form class="form" action="process-login.php" method="post">
           <div class="form__cover"></div>
           <div class="form__loader">
               <div class="spinner active">
                   <svg class="spinner__circular" viewBox="25 25 50 50">
                       <circle class="spinner__path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"></circle>
                   </svg>
               </div>
           </div>
           <div class="form__content">
               <h1>Authorization</h1>
               <div class="styled-input">
                    <input type="password" class="styled-input__input" name="password">
                   <div class="styled-input__placeholder">
                       <span class="styled-input__placeholder-text">Password</span>
                   </div>
                   <div class="styled-input__circle"></div>
               </div>
               <button type="submit" class="styled-button">
                   <span class="styled-button__real-text-holder">
                       <span class="styled-button__real-text">Submit</span>
                       <span class="styled-button__moving-block face">
                           <span class="styled-button__text-holder">
                               <span class="styled-button__text">Submit</span>
                           </span>
                       </span><span class="styled-button__moving-block back">
                           <span class="styled-button__text-holder">
                               <span class="styled-button__text">Submit</span>
                           </span>
                       </span>
                   </span>
               </button>
           </div>

       </form>
   </main>

   <script  src="../assets/js/index2.js"></script>
</body>
</html>