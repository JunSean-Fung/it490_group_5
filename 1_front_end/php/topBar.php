<?php 
    /* 
        
    */
    /* Purpose: 
        (1) Display the top bar and detect if user is logged in or not, will show differnt type of links based on it
        (2) will prompt to authenticate user session/ profile         

        Note:
        1) [Path]: Since this is in the php folder, path is this: ../folderName/fileName.fileType

        Task:
        1) Add the ability to know which type of top bar to show: Guest mode or with User account
    */
?>
<div class="container">         
    <head>
        <!-- Linked to topBar.css -->
        <link href="../projectX/css/topBar.css" rel="stylesheet">
    </head>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
        <h1 id="title" >Project X</h1>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">               
        </ul>
        <!-- Login section -->
        <div class="col-md-3 text-end loginBtn">
            <a href='../projectX/php/login.php'>
                <button type="button" class="btn btn-outline-primary me-2">Login/Register</button>
            </a>
        </div>
    </header>
</div>