<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/dashboard.css'])
    <title>لوحة التحكم</title>
</head>

<body>
    <div class="nav-bar">
        <div class="account-icon">
          
        </div>
    </div>
    <div class="main-page">
        <div class="page-title">
            <p>لوحة التحكم</p>
        </div>

        <div class="control-buts-div">

            {{-- -------- --}}
            <div class="container-div control-one-but">
               <p> ادارة الطلاب</p>
            </div>
          
            {{-- -------- --}}
            <div class="container-div control-one-but">
               <p> ادارة المعلمين</p>
            </div>
       
            {{-- -------- --}}
            <div class="container-div control-one-but">
               <p> ادارة الصفوف</p>
            </div>
            {{-- -------- --}}
        </div>
    </div>

</body>

</html>
