<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposal upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,300" rel="stylesheet">
    <link href="http://www.stp-org.com/logo.png" rel="icon" type="image/jpg">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="background">
    <!--this is the navbar-->

    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid" style="height: 40px">
            <img alt="STP" src="http://www.stp-org.com/logo.png">
        </div>
    </nav>

    <div class="head">
        <h1>Invent & Prevent Proposal</h1>
    </div>

    <!--this is the form-->

    <form id="upload" class="container mx-auto" name="myForm" autocomplete="off" action="#">

        <div class="form-row">
            <div class="form-group col-sm">
                <div class="form-floating-label">
                    <input type="tel" id="number" name="tel" class="floating-label-field" required onkeypress="isInputNumber(event)">
                    <label id="phoneLabel" for="tel" class="eachLabel">Phone Number</label>
                    <h6 id="hnumber"></h6>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm fileInput">
                <div class="file-upload-wrapper" data-text="Upload Your PDF file">
                    <input type="file" id="uploadFile" name="uploadFile" class=" file-upload-field" accept=".pdf" required >
                </div>
            </div>
        </div>


        <div class="text-center">
          <button type="submit" name="submit" id="submitbutton" class="btn btn-danger johayna" >Submit</button>
        </div>
        
    </form>

    <!-- Footer -->
    <div class="lower">
        <a class="FACEBOOK" href="https://www.facebook.com/STP.Organization/" target="_blank"><i class="fab fa-facebook-square"></i></a> <a class="TWITTER" href="https://www.twitter.com/STP_Egypt?fbclid=IwAR2HHTwh5H9C5yqZ89aCsvW7xGWPmKxU40tuo-BmuyCrljf1X9fxSzl6VkU"
            target="_blank"><i class="fab fa-twitter-square"></i></a> <a class="YOUTUBE" href="https://www.youtube.com/user/STPchannel?fbclid=IwAR1xGCJWuAhBW1ItAIp8p7OhM4Xiy8xO9-mtJeD_qAmkgM3wcYPMVArScSg" target="_blank"><i class="fab fa-youtube-square"></i></a>        <a href="https://instagram.com/STP_Egypt?fbclid=IwAR3QuvLNOeO2SB-OgdY-xUTmXuetMQ5DIFVtQXZ8HeAgjb-HSYN9gi1nD2Q" target="_blank"><i class="fab fa-instagram INSTA"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/scripts.js">
    </script>
    <!-- </div> -->
</body>

</html>