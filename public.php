<?php
include 'index.php';
?>



<html>
    <head>
        <title> contact form </title>
    </head>

    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
            
        </div>
        <form id="contact_form" action="interface.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" size="30" value=<?php echo $n  ?>> <?php     echo $name ?><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" size="30"  value=<?php echo $e ?> > <?php echo $email ?> <br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30" ><?php echo $m ?></textarea> <?php echo $message ?> <br />

            </div>

            <input id="submit" name="submit" type="submit" value="submit" />
            <input id="clear" name="clear" type="reset"  />

        </form>
        <?php 
    echo $validation  ;
    ?>
    </body>

</html>
