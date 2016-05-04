<?php 
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: database_error.php
// Description: This is the code designed to display the error if the database connection fails.
include '../../view/header.php'; ?>
<main>
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>Error message: <?php echo $error_message; ?></p>
</main>
<?php include '../../view/footer.php'; ?>