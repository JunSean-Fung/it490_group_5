<?php 

    /* Purpose: 
        (1) Display the footer on all the webpages     

        Note:
        1) [Path]: Since this is in the php folder, path is this: ../folderName/fileName.fileType

        Task:
        1) make it look nice
        2) Figure out the donation button location
    */
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../css/footer.css">
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
