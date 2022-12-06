<!DOCTYPE html>
<html lang="tr">
<head>
    <base href="<?php echo base_url(); ?>">
    <title><?php echo $title . "-" . $settings->Title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $settings->Description; ?>">
    <meta name="keywords"
          content="<?php echo $settings->Keywords; ?>">
    <meta name="author" content="<?php echo $settings->Author; ?>">

    <!-- All CSS Files -->
    <link rel="shortcut icon" href="admin/uploads/logofavicon/<?php echo $settings->Favicon; ?>" type="image/*">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.lineProgressbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link id="colors" rel="stylesheet" href="assets/css/colors/defaults-color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css">

    <style>
        .totop {
            position: fixed;
            bottom: 25px;
            right: 25px;
            cursor: pointer;
            display: none;
            background: #000000;
            color: #FFFFFF;
            border-radius: 25px;
            height: 45px;
            line-height: 50px;
            padding: 0 10px;
            font-size: 18px;
        }

        .pagination a, .pagination strong {
            padding: 5px;
            text-decoration: none;
            box-shadow: 0px 0px 8px rgba(5, 5, 5, 0.3);
            width: 55px;
            height: 50px;
            line-height: 40px;
            font-size: 16px;
            border-radius: 100%;
            font-weight: 900;
            text-align: center;
            color: #262626;
            border: 1px solid #262626;
            display: inline-block;
        }

        .pagination strong {
            background-color: #262626;
            color: #FFFFFF;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        /*
        .filter-button {
            font-size: 18px;
            border: 1px solid #055DB6;
            border-radius: 5px;
            text-align: center;
            color: #055DB6;
            margin-bottom: 30px;

        }

        .filter-button:hover {
            font-size: 18px;
            border: 1px solid #055DB6;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: #055DB6;

        }

        .btn-default:active .filter-button:active {
            background-color: #055DB6;
            color: white;
        } */

    </style>

</head>
<body>