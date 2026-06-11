<!DOCTYPE html>

<html lang="en">
<x-app-layout>

    <head>
        @vite(['resources/css/students.css', 'resources/js/teachers.js'])
    </head>

    <body>


        <div class="main-page">
            <div class="page-title">
                <p>--ادارة المعلمين--</p>
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
                        <label for="date"> التخصص</label>
                        <input type="text" id="date">
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
                                <th> التخصص</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="showStdInfo()">
                                <td>يحيى</td>
                                <td>767565454</td>
                                <td>عربي</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- ---------//قائمة الطلاب//----------- --}}
                {{-- -----------معلومات الطالب ------------- --}}
                <div id="teachers-info-div" class = "container-div students-info-div">
                    <h3 class ="info-std-title">معلومات الطالب</h3>

                    <div class ="info-std-content">
                        <p>الاسم : {{ 'يحيى' }}</p>
                        <p>البريد الالكتروني : {{ 'yahia@gmail.com' }}</p>
                        <p> تاريخ الميلاد : {{ '2004/1/1' }}</p>
                        <p> رقم الهاتف : {{ '096517914' }}</p>
                        <p> الصف الدراسي : {{ 'ثالث ثانوي' }}</p>
                    </div>
                    <div class="buttons-div">
                        <button id="delete-teachers-but">حذف</button>
                        <button id="edit-teachers-but">تعديل</button>
                        <button id="cancel-teachers-but">الغاء</button>
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
</x-app-layout>

</html>
