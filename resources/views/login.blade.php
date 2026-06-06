<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/login.css', 'resources/js/app.js'])

    <title>login</title>
</head>




<body>
   
    <div class="main-flex-center">
        <div class="container-div login-div">
            @if (true)
                <form action="">
                    <!-- ---------- -->
                    <div class="input-label-div">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <!-- ------------- -->

                    <div class="input-label-div">
                        <label for="email">password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <!-- ------------- -->
                    <div class = "buttons-div">
                        <button class = "">تسجيل</button>
                    </div>
                </form>
            @else
               <div class = "info-div">
                <p> البريد الالكتروني : {{"yahia@gmail.com"}}</p>
               </div>
                <div class = "buttons-div">
                        <button class = "">تسجيل الخروج</button>
                    </div>

            @endif



        </div>
    </div>

</body>

</html>
