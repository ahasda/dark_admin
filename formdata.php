<?php
/*
$conn = mysqli_connect('localhost','root','','hu') or die();
// $files[];
$pname = mysqli_real_escape_string($conn , $_POST['name']);
$oldp = mysqli_real_escape_string($conn , $_POST['old']);
$newp = mysqli_real_escape_string($conn , $_POST['newp']);
$mass = mysqli_real_escape_string($conn , $_POST['message']);
$produce = mysqli_real_escape_string($conn , $_POST['pdata']);

// $files = mysqli_real_escape_string($conn , $_FILES['file']);

echo $pname . "<br>";
echo $oldp . "<br>";
echo $newp . "<br>";
echo $mass . "<br>";
echo $produce . "<br>";

print_r();

*/

?>

<?php
/*
$conn = mysqli_connect('localhost', 'root', '', 'hu') or die("Connection failed: " . mysqli_connect_error());

$pname = mysqli_real_escape_string($conn, $_POST['name']);
$oldp = mysqli_real_escape_string($conn, $_POST['old']);
$newp = mysqli_real_escape_string($conn, $_POST['newp']);
$mass = mysqli_real_escape_string($conn, $_POST['message']);
$produce = mysqli_real_escape_string($conn, $_POST['pdata']);

$files = $_FILES['file'];

echo $pname . "<br>";
echo $oldp . "<br>";
echo $newp . "<br>";
echo $mass . "<br>";
echo $produce . "<br>";

// Print details of uploaded file
print_r($files);

*/
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'hu') or die("Connection failed: " . mysqli_connect_error());
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        // File data
        $file_type = $_FILES["file"]["type"];
        
        // Determine image type based on file type
        if (strpos($file_type, 'image') !== false) {
            echo "File type: Image<br>";
        } else {
            echo "File type: Not an image<br>";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }
}
?>

