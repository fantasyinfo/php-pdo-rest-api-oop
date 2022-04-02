<?php


/**
 * Design & Developed By Gaurav Sharma ( Fantasy Info )
 * Hire me online : https://www.freelancer.in/u/fantasyinfo
 * Checkout my website: https://fantasyinfo.in/
 * Checkout my youtube channel: https://www.youtube.com/c/FantasyInfo/
 */

/**
 * setting up the ini file for display all errors
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * adding required headers
 */
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET');
header('Content-Type:application/json charset:UTF-8');
header('Access-Control-Allow-Headers:Access-Control-Allow-Origin,Access-Control-Allow-Methods,Content-Type,Authorization');

/**
 * including functions class
 */
require_once('../../../classes/APIFunctions.php');

// creating function object
$functions = new APIFunctions();



// getting parameters from API
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $student_id = $_GET['_id'];
    $functions->showSingleStudent("student", $student_id);
    $functions->showMessage();
} else {
    echo json_encode(array('status' => http_response_code(503), 'message' => 'Only GET Method Allowed'));
}