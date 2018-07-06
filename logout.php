

        <?php
        
            # code...
        
    session_start();
    if(session_destroy())
    {
         echo"<script>alert('You have logged out!')</script>"; 
    header("Location: customerlog.php");
    }
    ?>