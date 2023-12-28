<?php session_start();?>

<!DOCTYPE html>
<html>
<head>

 
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/home/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/home/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/home/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/home/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/home/css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/home/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/home/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/home/css/style.css">
<link rel="stylesheet" href = "css/home/css/login.css" >
<link rel="stylesheet" type="text/css" href="css/home/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 


<title>Navigation Bar</title>
<script>
    // JavaScript code to display each input field one after the other
    var form = document.getElementById("signup-form");
    var formElements = form.getElementsByClassName("form-group");
    var currentElementIndex = 0;

    function showNextElement() {
        formElements[currentElementIndex].style.display = "none";
        currentElementIndex++;

        if (currentElementIndex < formElements.length) {
            formElements[currentElementIndex].style.display = "block";
        }
    }

    formElements[currentElementIndex].style.display = "block";
    form.addEventListener("input", showNextElement);
</script>
</head>
