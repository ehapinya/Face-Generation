<?php session_start(); require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
    <title>Face Generator using GAN-Control</title>
    <link rel="stylesheet" href="style.css">
    <header id="header">
        <table>
            <tr>
                <th>
                    <h1>Face Generator using GAN-Control</h1>
                </th>
                <th class="right">
                    <a class="button" href="https://github.com/amazon-science/gan-control/tree/main">GAN-Control</a>
                </th>
            </tr>
        </table>
    </header>
    <div class="navbar">
        <a href="index.html">&ensp;CSS485 Deep Learning&ensp;</a>
    </div>
	<body class="shortpage">
		<div id="content" class="form">
            <h1 style="font-size: 150%; margin-left:20px;"><b> This is the result</b><br></h1>
            <h3 class="center"> Welcome <?php echo $firstname, " ",$lastname,"!!!"; ?> </h3>
            <div class="center">
                <h4>
                <?php   
                        if (isset($_POST['firstname'])) {
                            $firstname = $_POST['firstname'];
                        }
                        if (isset($_POST['lastname'])) {
                            $lastname = $_POST['lastname'];
                        }
                        if (isset($_POST['DOB'])) {
                            $dob = $_POST['DOB'];
                        }
                        else {
                            $dob = '';
                        }
                        if (isset($_POST['phonenum'])) {
                            $phone_no = $_POST['phonenum'];
                        }
                        else {
                            $phone_no = '';
                        }
                        if (isset($_POST['email'])) {
                            $email = $_POST['email'];
                        }
                        if (isset($_POST['citizenID'])) {
                            $citizen_id = $_POST['citizenID'];
                        }
                        else {
                            $citizen_id = '';
                        }
                        if (isset($_POST['username'])) {
                            $username = $_POST['username'];
                        }
                        else {
                            $username = '';
                        }
                        if (isset($_POST['passwd'])) {
                            $password = $_POST['passwd'];
                        }
                        else {
                            $password = "";
                        }
                        if (isset($_POST['usergroup'])) {
                            $usergroup = $_POST['usergroup'];
                        }
                        else {
                            $usergroup = "";
                        }
                        if ((($dob == '') || ($phone_no == '') || ($citizen_id == '') || ($username == '') || ($password == ''))) {
                            $usergroup = "";
                        }
                        if (isset($_POST['gender'])) {
                            $gender = $_POST['gender'];
                        }
                      
                ?>

                </h4> 
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>
    </body>
</html>