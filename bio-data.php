<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="clint.css">
    <title>Your Bio-Data</title>
</head>
<body>
<h2 class="header">BIO-DATA FORM</h2>
<?php
if (isset($_POST['save'])) {
    //Personal Details
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $face = $_POST['face'];
    $religion = $_POST['religion'];
    $gotra = $_POST['gotra'];
    $gen = $_POST['gen'];
    // about myself
    $about = $_POST['about'];
    $language = $_POST['language'];
    $skills = $_POST['skills'];
    $hobbies = $_POST['hobbies'];
    //Educational Details
    $school = $_POST['school'];
    $intermediate = $_POST['inter'];
    $college = $_POST['graduation'];
    $master = $_POST['graduate'];
    // family background
    $dada = $_POST['grand'];
    $papa = $_POST['father'];
    $mummy = $_POST['mother'];
    $siblings = $_POST['sib'];
    //contact information
    $email = $_POST['email'];
    $phone = $_POST['mobile'];

}
?>
<section id="form-id">
    <h3>PERSONAL DETAILS</h3>
    <hr>
    <table class="table-col">
        <tr class="row">
            <td class="table-data"><label class="label-col">Name:</label></td>
            <td class="table-data"><?php echo $name; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Birth date:</label></td>
            <td class="table-data"><?php echo $date; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Time:</label></td>
            <td class="table-data"><?php echo $time; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Birth place:</label></td>
            <td class="table-data"><?php echo $place; ?></td>
        </tr>

        <tr class="row">
            <td class="table-data"><label class="label-col">Height(In ft and Inch):</label></td>
            <td class="table-data"><?php echo $height; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Weight(In Kg):</label></td>
            <td class="table-data"><?php echo $weight; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Complexion:</label></td>
            <td class="table-data"><?php echo $face; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Religion:</label><br></td>
            <td class="table-data"><?php echo $religion; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Gotra:</label><br></td>
            <td class="table-data"><?php echo $gotra; ?></td>
        </tr>

        <tr class="row">
            <td class="table-data"><label class="label-col">Gen: </label><br></td>
            <td class="table-data"><?php echo $gen; ?></td>
        </tr>

    </table>
    <h3>ABOUT MYSELF</h3>
    <hr>
    <table class="table-col">
        <tr class="row">
            <td class="table-data">About You:</td>
            <td class="table-data"><?php echo $about; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Language:</label><br></td>
            <td class="table-data"><?php echo $language; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Skills:</label><br></td>
            <td class="table-data"><?php echo $skills; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Hobbies:</label><br></td>
            <td class="table-data"><?php echo $hobbies; ?></td>
        </tr>
    </table>

    <h3>EDUCTION</h3>
    <hr>
    <table class="table-col">

        <tr class="row">
            <td class="table-data"><label class="label-col">High school:</label><br></td>
            <td class="table-data"><?php echo $school; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Intermediate:</label><br></td>
            <td class="table-data"><?php echo $intermediate; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Graduation:</label><br></td>
            <td class="table-data"><?php echo $college; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Post-graduation:</label><br></td>
            <td class="table-data"><br><?php echo $master; ?></td>
        </tr>


    </table>
    <h3>FAMILY BACKGROUND</h3>
    <hr>
    <table class="table-col">
        <tr class="row">
            <td class="table-data"><label class="label-col">Grand father:</label><br></td>
            <td class="table-data"><?php echo $dada; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Father:</label><br></td>
            <td class="table-data"><?php echo $papa; ?></td>
        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Mother:</label><br></td>
            <td class="table-data"><?php echo $mummy; ?></td>
        </tr>

        <tr class="row">
            <td class="table-data"><label class="label-col">Siblings:</label><br></td>
            <td class="table-data"><?php echo $siblings; ?></td>
        </tr>

    </table>
    <h3>CONTACT INFORMATION</h3>
    <table class="table-col">
        <tr class="row">
            <td class="table-data"><label class="label-col">Email:</label><br></td>
            <td class="table-data"><?php echo $email; ?></td>

        </tr>
        <tr class="row">
            <td class="table-data"><label class="label-col">Mobile:</label><br></td>
            <td class="table-data"><?php echo $phone; ?></td>
        </tr>
    </table>
    <center>
        <button class="btn" onclick="window.print()">
            <i class="fa fa-download">Download</i>
        </button>
    </center>
</section>
</body>
</html>


