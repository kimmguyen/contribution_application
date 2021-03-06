<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author" />
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" name="description" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:description" content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" />
<meta property="og:image" content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg" />
<meta property="og:site_name" content="atlas " />
<title>Home Page</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/light/assets/vendor/pace/pace.css' />
<script src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/light/assets/vendor/pace/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css' />
<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/bundles/fc681442cee6ccf717f33ccc57ebf17a4e0792e1.css' />


<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css' />
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css' />
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/16e33a95bb46f814f87079394f72ef62972bd197/light/assets/css/atmos.min.css' />
<!-- Additional library for page -->
<link rel="stylesheet" type='text/css' href="./css/student.css" />

<?php include 'aside.php' ?>


<body class="sidebar-pinned ">
    <?php include 'aside.php' ?>
    <main class="admin-main">
        <!-- Header -->
        <?php include 'header.php' ?>
        <!-- Session -->

        <section class="admin-content">
            <div class="container m-t-30" style="margin-top: 0">
                <div class="row justify-content-md-center">
                    <div class="col-md-12 mt-4 mb-4" style="background-color: #FFFFFF; font-weight: 
                    bold; padding-bottom: 1%;padding-top: 1%; border-radius: 10px;">

                        MANAGE SYTEM > <a href="#" style="color: blue;">MANAGE ARTICLE</a></div>
                    <div class="col-md-12 mt-4 mb-4" style="font-weight: bold;">
                        <img src="https://img.icons8.com/metro/26/000000/file.png" /> ACTICLE
                    </div>

                    <div class="form-group has-search col-md-12 row" style="background-color: #F4F7FC; border-radius: 10px;">
                        <div class="form-group has-search col-md-12" style="margin: 2%;">
                            <input type="text" class="form-control col-md-4" placeholder="Search">
                        </div>

                        <div class="col-md-12" style="padding-left: 0; padding-right:0">
                            <table class="table table-bordered">
                                <thead class="thead" style="background-color: #F4F7FC; text-align: center;">
                                    <tr style="color: black !important">
                                        <th style="color: black !important" scope="col">NO.</th>
                                        <th style="color: black !important" scope="col">AVATAR</th>
                                        <th style="color: black !important" scope="col">STUDENT OWNER</th>
                                        <th style="color: black !important" scope="col">EMAIL</th>
                                        <th style="color: black !important" scope="col">STATUS</th>
                                        <th style="color: black !important" scope="col">ACTION</th>
                                        <th style="color: black !important" scope="col">SUBMIT TIME</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr>
                                        <th scope="row" style="padding: 2.5%;">1</th>
                                        <td><img src="./images/AvatarListofReport.png"></td>
                                        <td style="padding: 2.5%;">Nguyen Thu Thuy</td>
                                        <td style="padding: 2.5%;">haduc2468@gmail.com</td>
                                        <td style="padding: 1.5%;"><button style="border-radius: 20px" type="button" class="btn btn-success">NOT GRADE</button></td>
                                        <td style="padding: 1.5%;"><button style="border-radius: 10px" type="button" class="btn btn-primary">GRADE</button></td>
                                        <td style="padding: 2.5%;">13/05/2021</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><img src="./images/AvatarListofReport.png"></td>
                                        <td style="padding: 2.5%;">Nguyen Thu Thuy</td>
                                        <td style="padding: 2.5%;">haduc2468@gmail.com</td>
                                        <td style="padding: 1.5%;"><button style="border-radius: 20px" type="button" class="btn btn-success">NOT GRADE</button></td>
                                        <td style="padding: 1.5%;"><button style="border-radius: 10px" type="button" class="btn btn-primary">GRADE</button></td>
                                        <td style="padding: 2.5%;">13/05/2021</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><img src="./images/AvatarListofReport.png"></td>
                                        <td style="padding: 2.5%;">Nguyen Thu Thuy</td>
                                        <td style="padding: 2.5%;">haduc2468@gmail.com</td>
                                        <td style="padding: 1.5%;"><button style="border-radius: 20px" type="button" class="btn btn-danger">GRADED</button></td>
                                        <td style="padding: 1.5%;"><button style="border-radius: 10px" type="button" class="btn btn-warning">EDIT</button></td>
                                        <td style="padding: 2.5%;">13/05/2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</body>

<script src='https://d33wubrfki0l68.cloudfront.net/bundles/85bd871e04eb889b6141c1aba0fedfa1a2215991.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-66116118-3');
</script>

<!--Additional Page includes-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/light/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/d678dabfdc5c3131d492af7ef517fbe46fbbd8e4/light/assets/js/dashboard-01.js'></script>

</body>

</html>