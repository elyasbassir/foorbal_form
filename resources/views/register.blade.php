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
        body{
            background-image: url("image/bg.jpg");

        }
        * {
            font-family: "Baloo Bhaijaan 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: < weight >;
            font-style: normal;
            direction: rtl;
        }
        .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 0;
            left: 10%;
            z-index: 2;
            width: 80%;
        }
    </style>

</head>
<body>
<div class="container justify-content-center bg-text">
    <h3 class="text-center mt-4">فرم ثبت نام</h3>
    <h4 class="text-center mb-4"> باشگاه فرهنگی ورزشی فجر شهید سلیمانی فردوس</h4>
    <hr>
    <form action="{{route('register')}}" method="post">
        @csrf
    <div class="row justify-content-center">
        <input class="form-control  mb-3 w-75 " type="text" name="name_lastname" placeholder="نام و نام خانوادگی ...">
        <input class="form-control  mb-3 w-75 " type="text" name="father_name" placeholder="نام پدر ...">
        <input class="form-control  mb-3 w-75 " type="text" name="father_job" placeholder="شغل پدر ...">
        <input class="form-control  mb-3 w-75 " type="text" name="code_meli" placeholder="کد ملی ...">
        <input class="form-control  mb-3 w-75 " type="text" name="birth_day" placeholder="تاریخ تولد ..." data-jdp>
        <input class="form-control  mb-3 w-75 " type="text" name="knowledge" placeholder="پایه تحصیلی ...">
        <input class="form-control  mb-3 w-75 " type="text" name="knowledge_location" placeholder="... محل تحصیل">
        <input class="form-control  mb-3 w-75 " type="phone" name="phone" placeholder="شماره همراه پدر (فعال در ایتا) ...">

        <p class="text-center">**تایید میکنم که اطلاعات وارد شده صحت دارد**</p>
        <input type="submit" class="btn btn-primary w-50 mb-4" value="ثبت نام">
    </form>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{$error}}"
            });
        </script>
        @endforeach
        @endif
        @include('sweetalert::alert')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
<script>
    jalaliDatepicker.startWatch();
</script>
</body>
</html>
