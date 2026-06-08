<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/students.js'])
    @vite(['resources/css/students.css'])

    <title>الطلاب</title>
</head>

<body>
    <div class="nav-bar">
        <div class="account-icon">

        </div>
    </div>

    <div class="main-page">
        <div class="page-title">
            <p>--ادارة الطلاب--</p>
        </div>
        <div class="msin-page-2 students-mian-page">

            <form action="" class="container-div students-inputs-div">
                {{-- -----الاسم------- --}}
                <div class="input-label-div">
                    <label for="name">الاسم</label>
                    <input type="text" id="name">
                </div>
                {{-- ---------------- --}}
                {{-- -----الاميل------- --}}
                <div class="input-label-div">
                    <label for="email">البريد الالكتروني</label>
                    <input type="email" id="email">
                </div>
                {{-- ---------------- --}}
                {{-- -----تاريخ الميلاد------- --}}
                <div class="input-label-div">
                    <label for="date">تاريخ الميلاد</label>
                    <input type="date" id="date">
                </div>
                {{-- ---------------- --}}
                {{-- -----الرقم------- --}}
                <div class="input-label-div">
                    <label for="number">الرقم</label>
                    <input type="text" id="number">
                </div>
                {{-- ---------------- --}}
                {{-- -----الصف------- --}}
                <div class="input-label-div">
                    <label for="class">الصف</label>
                    <select name="class" id="class"></select>
                </div>
                {{-- ---------------- --}}

                <div class = "buttons-div">
                    <button>اضافة</button>
                    <button>الغاء</button>

                </div>
            </form>

            {{-- ------------------------------------------------------------ --}}

            {{-- -----------قائمة الطلاب------------- --}}
            <div class = "container-div students-list-div">
                <table>
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الرقم</th>
                            <th>تاريخ الميلاد</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="showStdInfo()">
                            <td>يحيى</td>
                            <td>767565454</td>
                            <td>2004/1/1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- ---------//قائمة الطلاب//----------- --}}
            {{-- -----------معلومات الطالب ------------- --}}
            <div id="students-info-div" class = "container-div students-info-div">
                <h3 class ="info-std-title">معلومات الطالب</h3>

                <div class ="info-std-content">
                    <p>الاسم : {{ 'يحيى' }}</p>
                    <p>البريد الالكتروني : {{ 'yahia@gmail.com' }}</p>
                    <p> تاريخ الميلاد : {{ '2004/1/1' }}</p>
                    <p> رقم الهاتف : {{ '096517914' }}</p>
                    <p> الصف الدراسي : {{ 'ثالث ثانوي' }}</p>
                </div>
                <div class="buttons-div">
                    <button id="delete-std-but">حذف</button>
                    <button id="edit-std-but">تعديل</button>
                    <button id="cancel-std-but">الغاء</button>
                </div>
            </div>
            {{-- -----------//معلومات الطالب //------------- --}}

        </div>

    </div>
{{-- للتعديل ---------- --}}
    <div id="edit-page-id" class="edit-container-div">
       <form action="" class="container-div students-inputs-div">
                {{-- -----الاسم------- --}}
                <div class="input-label-div">
                    <label for="name">الاسم</label>
                    <input type="text" id="name">
                </div>
                {{-- ---------------- --}}
                {{-- -----الاميل------- --}}
                <div class="input-label-div">
                    <label for="email">البريد الالكتروني</label>
                    <input type="email" id="email">
                </div>
                {{-- ---------------- --}}
                {{-- -----تاريخ الميلاد------- --}}
                <div class="input-label-div">
                    <label for="date">تاريخ الميلاد</label>
                    <input type="date" id="date">
                </div>
                {{-- ---------------- --}}
                {{-- -----الرقم------- --}}
                <div class="input-label-div">
                    <label for="number">الرقم</label>
                    <input type="text" id="number">
                </div>
                {{-- ---------------- --}}
                {{-- -----الصف------- --}}
                <div class="input-label-div">
                    <label for="class">الصف</label>
                    <select name="class" id="class"></select>
                </div>
                {{-- ---------------- --}}

                <div class = "buttons-div">
                    <button>تعديل</button>
                    <button>الغاء</button>

                </div>
            </form>
    </div>

</body>

</html>
