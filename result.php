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
            <div class="center">
                <h4>
                <?php   
                        if (isset($_POST['haircolor'])) {
                            $haircolor = $_POST['haircolor'];
                        }
                        if (isset($_POST['age'])) {
                            $lastname = $_POST['age'];
                        }
                        if (isset($_POST['illumination'])) {
                            $illumination = $_POST['illumination'];
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