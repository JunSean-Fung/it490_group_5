<?php 

    /* Purpose: 
        (1) Display the footer on all the webpages     

        Note:
        1) [Path]: For some reason, php folder path is this: ../folderName/fileName.fileType 
                    but the correct path for this folder is this: ../projectX/folderName/fileName.filetype

        Task:
        1) make it look nice
        2) Figure out the donation button location
    */
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../projectX/css/footer.css">
    </head>
    <footer  class="py-3 my-4">
        <div class = "container">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="../projectX/" class="nav-link px-2 link-secondary">Home</a>
                </li>
                <!--This is where Forum page link will go-->
                <li>
                    <a href="https://github.com/JunSean-Fung/it490_group_5" class="nav-link px-2 link-dark">Github</a>
                </li>
                <!--This is where donation page link will go-->
                <li>
                    <a href="../projectX/php/donation.php" class="nav-link px-2 link-dark">Donation</a>
                </li>
                <!--This is where About page link will go-->
                <li>
                    <a href="../projectX/php/about.php" class="nav-link px-2 link-dark">About Us</a>
                </li>
            </ul>
            <p class="text-center text-muted">&copy; 2021 Project X, Inc</p>
        </div>
    </footer>  
</html>
