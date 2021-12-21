<?php 

    /* Purpose: 
        (1) Display the footer on all the webpages     

        Note:
        1) [Path]: For some reason, php folder path is this: ../folderName/fileName.fileType 
                    but the correct path for this folder is this: ../projectX/folderName/fileName.filetype

        Task:
        1) make it look nice
        2) Figure out the donation button location, put it all the way to the right side?
    */
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../projectX/css/footer.css">
    </head>
    <footer  class="container-fluid py-3 my-4">
      <div class = "container">
         <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="https://github.com/JunSean-Fung/it490_group_5" class="nav-link px-2 text-muted">Github</a></li>
            <li class="nav-item">
               <?php 
                  include('../php/donation.php') #<-- this trigger the button instead of going to that page
               ?>
            </li>
         </ul>

         <p class="text-center text-muted">&copy; 2021 Project X, Inc</p>
      </div>
   </footer> 
</html>
