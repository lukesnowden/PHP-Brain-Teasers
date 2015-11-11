<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Check the request type, if post get the answer else show the question
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require('solution.php');

    // **** Call your answer function here ****
    $solution = solution($_POST['string']);

    // Display answer
    // Convert bool to text
    $solution = ($solution) ? 'True' : 'False';
    echo (isset($solution) ? $solution : 'Challenge not yet complete');

} else {
    ?>
    <form method="POST">
        <!-- *** Add any inputs for the question here **** -->
        <input type="text" name="string">


        <input type="submit" value="Submit">
    </form>
    <?php
}