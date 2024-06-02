<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>باشگاه فرهنگی ورزشی فجر شهید سلیمانی فردوس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&display=swap');

        body {
            background-image: url("../../image/bg.jpg");

        }

        * {
            font-family: "Baloo Bhaijaan 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: < weight >;
            font-style: normal;
            direction: rtl;
        }

        .bg-text {
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 0;
            left: 5%;
            z-index: 2;
            width: 90%;
        }
    </style>

</head>
<body>
<div class="container justify-content-center bg-text">
    <h3 class="text-center mt-4">لیست اسامی ثبت نام شده</h3>
    <h4 class="text-center mb-4"> باشگاه فرهنگی ورزشی فجر شهید سلیمانی فردوس</h4>
    <hr>
    @csrf
    <div class="row justify-content-center">


            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام</th>
                    <th scope="col">نام پدر</th>
                    <th scope="col">شغل پدر</th>
                    <th scope="col">کد ملی</th>
                    <th scope="col">تولد</th>
                    <th scope="col">تحصیلات</th>
                    <th scope="col">محل تحصیلات</th>
                    <th scope="col">شمراه همراه</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $c = 0;
                    ?>
                @foreach($data as $key=>$value)
                    <?php
                    $c++;
                    ?>
                <tr>
                    <th scope="row">{{$c}}</th>
                    <td>{{ $value->name_lastname }}</td>
                    <td>{{ $value->father_name }}</td>
                    <td>{{ $value->father_job }}</td>
                    <td>{{ $value->code_meli }}</td>
                    <td>{{ $value->birth_day }}</td>
                    <td>{{ $value->knowledge }}</td>
                    <td>{{ $value->knowledge_location }}</td>
                    <td>{{ $value->phone }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>



    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

</body>
</html>
