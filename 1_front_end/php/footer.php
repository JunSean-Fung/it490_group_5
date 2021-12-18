<?php 
    # Purpose: Called from all other web page to set up the header and also authenticate the correct user
    # NEEDS authentication on the specific user
    
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="">
    </head>
    <footer class="text-muted footer">
        <div>
            <ul>
                <!-- About Us -->
                <li><a href="../projectX/php/about.php">About Us</a></li>
                <!-- Github Link-->
                <li><a href="https://github.com/JunSean-Fung/it490_group_5">Github</a></li>                
                <!-- Donation -->
                <?php 
                    include('../projectX/php/donation.php')
                ?>
            </ul>
        </div>
    </footer>    
</html>
