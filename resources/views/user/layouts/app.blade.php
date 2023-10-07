<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home-exam_php</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    @include("user.layouts.head")
</head>

<body onload="initialize()">
<div id="wrapper">

    <!-- page preloader begin -->
    <div id="de-preloader"></div>
    <!-- page preloader close -->

    <!-- header begin -->
    @include("user.layouts.hearder")
    <!-- header close -->
    <!-- content begin -->
@yield("content")
    <!-- content close -->
    <a href="#" id="back-to-top"></a>
    <!-- footer begin -->
    @include("user.layouts.footer")
    <!-- footer close -->
</div>
<div id="selector">
    <div id="demo-rtl" class="sc-opt">
        <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
    </div>
</div>
<div id="purchase-now">

    <div class="pn-hover">Buy Now</div>
</div>
<!-- Javascript Files
================================================== -->
@include("user.layouts.scripts")

</body>

</html>

