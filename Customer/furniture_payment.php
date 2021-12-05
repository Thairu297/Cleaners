<?php
include_once 'header.php';
?>
   <section class="header">
      <div class="container">
        <div class="flex-container1">
          <h2>Sofa set and Furniture cleaning</h2>
        </div>
        <div>
            <form action="signup.php" method="post"  class="login-email">
            <p class="login-text">Price: Ksh 35,000  </p>
            <p class="login-text">Payment for Sofa set and Furniture cleaning</p>
            <div class="input-group">
                        <input 
                        type="text"
                        name="name" 
                        value="35000 " required />
            </div>
            <div class="input-group">
               <button type="submit" name="submit" class="button-login">Pay</button>
            </div>
            <div >
             <a href="furniture.php" class="link_home">Back to service </a>
            </div>
            </form>
        </div>
        
    </section>
  </body>
</html>