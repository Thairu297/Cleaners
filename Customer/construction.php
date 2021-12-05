<?php
include_once 'header.php';
?>
 <section class="header">
      <div class="container">
        <div class="flex-container1">
          <h2>Post constructions cleaning</h2>
        </div>
        <div>
            <form action="signup.php" method="post"  class="login-email">
            <p class="login-text">Price: Ksh 70,000 </p>
            <p class="login-text">Choose the date and time</p>
            <div class="input-group">
                        <input 
                        type="text"
                        name="name" 
                        value="Post constructions cleaning" required />
                    </div>
            <div class="input-group">
                        <input 
                        type="date"
                        name="date" 
                        placeholder="Date" required />
                    </div>
            <div class="input-group">
                        <input
                            type="time"
                            name="time"
                            placeholder="Time"
                            required
                        />
                    </div>
            <div class="input-group">
               <button type="submit" name="submit" class="button-login">Save</button>
            </div>
            <div >
             <a href="service.php" class="link_home">Back to services </a>
            </div>
            </form>
        </div>
       
      </div>
    </section>
  </body>
</html>