<x-app-layout>


    <head>

        @vite(['resources/css/dashboard.css'])
        <title>لوحة التحكم</title>
    </head>

    <body>

        <div class="main-page">
            <div class="page-title">
                <p>لوحة التحكم</p>
            </div>

            <div class="control-buts-div">

                {{-- -------- --}}
                    <a class = "container-div control-one-but" href="/dashboard/students">
                        <p> ادارة الطلاب</p>

                    </a>

                {{-- -------- --}}
                <a class="container-div control-one-but" href="/dashboard/teachers">
                    <p> ادارة المعلمين</p>
                </a>

                {{-- -------- --}}
                <a class="container-div control-one-but" href="/dashboard/classrooms">
                    <p> ادارة الصفوف</p>
                </a>
                {{-- -------- --}}
            </div>
        </div>

    </body>

</x-app-layout>
