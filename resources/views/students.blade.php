<!DOCTYPE html>

<html lang="en">
<x-app-layout>

    <head>

        @vite(['resources/css/students.css', 'resources/js/students.js'])

        <title>الطلاب</title>
    </head>

    <body>


        <div class="main-page">
            <div class="page-title">
                <p>--ادارة الطلاب--</p>
            </div>
            <div class="msin-page-2 students-mian-page">
                <form class="container-div students-inputs-div" action="/dashboard/students" method="POST">
                    @csrf

                    {{-- -----الاسم------- --}}
                    <div class="input-label-div">
                        <label for="name">الاسم</label>
                        <input type="text" id="name" name="name">
                    </div>
                    {{-- ---------------- --}}
                    {{-- -----الاميل------- --}}
                    <div class="input-label-div">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" id="email" name="email">
                    </div>
                    {{-- ---------------- --}}
                    {{-- -----تاريخ الميلاد------- --}}
                    <div class="input-label-div">
                        <label for="date">تاريخ الميلاد</label>
                        <input type="date" id="date" name="birth_date">
                    </div>
                    {{-- ---------------- --}}
                    {{-- -----الرقم------- --}}
                    <div class="input-label-div">
                        <label for="number">الرقم</label>
                        <input type="text" id="number" name="phone">
                    </div>
                    {{-- ---------------- --}}
                    {{-- -----الصف------- --}}
                    <div class="input-label-div">
                        <label for="class">الصف</label>

                        <select name="classroom_id" id="class">
                            @if ($classrooms)
                                @foreach ($classrooms as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            @endif

                        </select>
                    </div>
                    {{-- ---------------- --}}

                    <div class = "buttons-div">
                        <button type="submit">اضافة</button>
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
                            @if ($students)
                                @foreach ($students as $std)
                                    <tr onclick="showStdInfo()">
                                        <td>{{ $std->name }}</td>
                                        <td>{{ $std->phone }}</td>
                                        <td>{{ $std->birth_date }}</td>
                                    </tr>
                                @endforeach
                            @endif


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
</x-app-layout>

</html>
