
<?php
session_start();
include 'header.php';

?>
<?php
    if (isset($_SESSION['SuccessMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2 mt-3">
                <div class="col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['SuccessMessage'];
                        unset($_SESSION['SuccessMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

<?php

if (isset($_SESSION['successMessage'])) {
?>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php  echo $_SESSION['successMessage'];
                 unset($_SESSION['successMessage']);   
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>


<?php
}

?>



<?php

if (isset($_SESSION['errorMessage'])) {
?>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php  echo $_SESSION['errorMessage'];
                 unset($_SESSION['errorMessage']);   
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>


<?php
}

?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

<link href="./assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./logincss/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="./logincss/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./logincss/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="./logincss/css/util.css">
<link rel="stylesheet" type="text/css" href="./logincss/css/main.css">

<meta name="robots" content="noindex, follow">
<script nonce="e68321bf-429a-40f6-9611-8c246e384833">
    (function(w, d) {
        ! function(a, e, t, r) {
            a.zarazData = a.zarazData || {};
            a.zarazData.executed = [];
            a.zaraz = {
                deferred: [],
                listeners: []
            };
            a.zaraz.q = [];
            a.zaraz._f = function(e) {
                return function() {
                    var t = Array.prototype.slice.call(arguments);
                    a.zaraz.q.push({
                        m: e,
                        a: t
                    })
                }
            };
            for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e);
            a.zaraz.init = () => {
                var t = e.getElementsByTagName(r)[0],
                    z = e.createElement(r),
                    n = e.getElementsByTagName("title")[0];
                n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                a.zarazData.x = Math.random();
                a.zarazData.w = a.screen.width;
                a.zarazData.h = a.screen.height;
                a.zarazData.j = a.innerHeight;
                a.zarazData.e = a.innerWidth;
                a.zarazData.l = a.location.href;
                a.zarazData.r = e.referrer;
                a.zarazData.k = a.screen.colorDepth;
                a.zarazData.n = e.characterSet;
                a.zarazData.o = (new Date).getTimezoneOffset();
                a.zarazData.q = [];
                for (; a.zaraz.q.length;) {
                    const e = a.zaraz.q.shift();
                    a.zarazData.q.push(e)
                }
                z.defer = !0;
                for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
                    try {
                        a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                    } catch {
                        a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                    }
                }));
                z.referrerPolicy = "origin";
                z.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                t.parentNode.insertBefore(z, t)
            };
            ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, 0, "script");
    })(window, document);
</script>
</head>

<body >




    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="./logincss/images/img-01.png" alt="IMG">
                </div>
                <form action="logincode.php" method="POST">
                    <span class="login100-form-title">
                        Member Login
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="loginbtn">
                        <input type="submit" class="loginbtn" value="login" name="submit">
                    </div>
                    
                    <div class="text-center p-t-136">
                        <a class="txt2" href="/signup.php">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./logincss/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="./logincss/vendor/bootstrap/js/popper.js"></script>
    <script src="./logincss/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="./logincss/vendor/select2/select2.min.js"></script>

    <script src="./logincss/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
<?php
include 'footer.php';
?>




    <script src="js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"74dc3abcae22b716","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>

    <?php

    

    ?>