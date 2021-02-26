<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="section" id="cover">
    <style>
        .afterbody {
            margin-left: auto;
            margin-top: auto;
            margin: auto;
            background-color: #F7F5F5;
            width: 11cm;
            padding-left: 30px;
            padding-top: 30px;
            padding-bottom: 40px;
            line-height: normal;
            border-radius: 30px;
        }
        .section#cover {
        height: 100vh;
        background-image: linear-gradient(135deg, #FFC2B0CF, #945374C7);
        background-blend-mode: darken;
        }
    </style>
    <div class="afterbody">
        <h1>{{$data->judul}}</h1>
        <p>Author: {{$data->penulis}}</p>
        <p>Pages: {{$data->halaman}}</p>
        <p>Year: {{$data->tahun}}</p>
        <a href="{{route('home')}}">Back</a>
    </div>
</body>
</html>