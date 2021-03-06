<?php include('./includes/title.inc.php'); ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if (isset($title)) {echo $title;} ?></title>
    <meta name="description" content="Therapick is the first online video directory of therapists. Browse video interviews of therapists, psychologist, counselors, and psychiatrists in your local area.">
    <META NAME="KEYWORDS" CONTENT="Therapy, Therapist, Find a Therapist, Marriage Counseling, Counseling, Counselor, Couples Counseling, Psychologist, Psychotherapy, psychotherapist, counsellor, counselling, find a counselor, find a psychologist, Therapy Directory, therapist videos, video, video directory, Counseling Directory, Therapick, therapicks, therapix, therapic, therapik, Therapick.com, therapicks.com, therapix.com, therapic.com, therapik.com, shrink" >
    <link rel="stylesheet" href="main.css" type="text/css">
    <script type='text/javascript' src='main.js'></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<div id="wrapper">

    <!--NAV BAR-->
    <?php include('./includes/menu.inc.php');?>
    <!--END NAV BAR-->


    <!--SEARCH BAR-->

    <div id="searchbar">
        <h1>Find a Therapist</h1>
        <form class="searchform" action="basic_search.php" method=post>
            <input class="searchfield" type="text" value="City or Zip" name="city_or_zip" onfocus="if (this.value == 'City or Zip') {this.value = '';}" onblur="if (this.value == '') {this.value = 'City or Zip';}" />
            <input class="searchbutton" type="button" value="" /><i class="icon-magnifyingglass"></i>
        </form>
        <ul>
            <a href="index.php"><li class="city-zip">City or Zip</li></a>
            <a href="index.html"><li class="last-name">Last Name</li></a>
        </ul>
    </div>

    <!--END SEARCH BAR-->

    <!--PRESS-->

    <div id="press">
        <h2>talking about <span class='therapick-name'>therapick</span></h2>
        <a href="http://www.businessweek.com/articles/2012-03-22/therapick-online-profiles-of-therapists" target="_blank"><img class="press-icon" src="http://www.therapick.com/images/icons/businessweek-logo-sm.jpeg" width=100 height=24 alt="Therapists in Los Angeles"/></a>
        <a href="http://articles.philly.com/2012-09-11/news/33738451_1_therapists-online-video-site-body-language" target="_blank"><img class="press-icon" src="http://www.therapick.com/images/icons/philadelphia_inquirer_logo.png" width=87 height=47 alt="Los Angeles Psychologist"/></a>
        <a href="http://www.chron.com/life/article/New-website-helps-patients-connect-with-therapists-3721055.php" target="_blank"><img class="press-icon" src="http://www.therapick.com/images/icons/chronicle-logo-sm.jpeg" width=75 height=36 alt="Therapist Los Angeles"/></a>
    </div>

    <!--END PRESS-->

    <hr class='search-break'>

    <!--LINKS-->

    <div id='links'>
        <h3>Find video listings for psychologists, psychiatrists,<br>
            therapists, counselors and group therapy in<br>
            California and major U.S. cities.</h3>
        <ul class='links'>
            <li><strong>California Therapists</strong></li>
            <br>
            <li><a href='/therapists-los-angeles.php'>Los Angeles</a></li>
            <li><a href='/therapists-san-francisco'>San Francisco</a></li>
            <li><a href='/therapists-san-diego'>San Diego</a></li>
            <li><a href='/therapists-berkeley'>Berkeley</a></li>
            <li><a href='/therapists-oakland'>Oakland</a></li>
            <li><a href='/therapists-san-jose'>San Jose</a></li>
            <li><a href='/therapists-beverly-hills'>Beverly Hills</a></li>
            <li><a href='/therapists-santa-monica'>Santa Monica</a></li>
            <li><a href='/therapists-orange-county'>Orange County</a></li>
            <li><a href='/therapists-sacramento'>Sacramento</a></li>
        </ul>
        <ul>
            <li><strong>U.S. Therapists</strong></li>
            <br>
            <li><a href='/therapists-new-york'>New York</a></li>
            <li><a href='/therapists-houston'>Houston</a></li>
            <li><a href='/therapists-philadelphia'>Philadelphia</a></li>
            <li><a href='/therapists-portland'>Portland</a></li>
            <li><a href='/therapists-chicago'>Chicago</a></li>
            <li><a href='/therapists-austin'>Austin</a></li>
            <li><a href='/therapists-seattle'>Seattle</a></li>
            <li><a href='/therapists-phoenix'>Phoenix</a></li>
            <li><a href='/therapists-washington-dc'>Washington D.C.</a></li>
            <li><a href='/therapists-boston'>Boston</a></li>
        </ul>
    </div>

    <!--END LINKS-->

</div>

<!--FOOTER-->
<?php include('./includes/footer.inc.php');?>
<!--END FOOTER-->

</body>
</html>