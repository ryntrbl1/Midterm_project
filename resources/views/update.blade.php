<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="section" id="cover">
    <img src=".../view/fgv.png" class="section" id="cover">
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

        .btn-submit {
            margin-left: 3px;
            margin-top: 20px;
            padding-right: 50px;
            padding-left: 50px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #F7F5F5;
            border-radius: 20px;
            width: 370px;
        }

        .kotak {
            width: 370px;
            height: 20px;
            border-radius: 10px;
        }
    </style>

    <form action="{{route('storebook', $data->id)}}" method="POST" id="cover">
        @csrf
        @method('patch')
        <div class="afterbody">
            <label>Title</label>
            <br>
            <input type="text" name="Title" placeholder="Judul Buku" value="{{$data->judul}}" class="kotak"> <br>
            @error('Title')
                <span class="invalid-feedback" role="alert" style="color:red">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
            <label>Author</label>
            <br>
            <input type="text" name="Author" placeholder="Author" value="{{$data->penulis}}" class="kotak"> <br>
            @error('Author')
                <span class="invalid-feedback" role="alert" style="color:red">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
            <label>Page</label>
            <br>
            <input type="number" name="Page" placeholder="Jumlah Halaman" value="{{$data->halaman}}" class="kotak"><br>
            @error('Page')
                <span class="invalid-feedback" role="alert" style="color:red">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
            <label>Year</label>
            <br>
            <input type="number" name="Year" placeholder="Tahun Terbit" value="{{$data->tahun}}" class="kotak"> <br>
            @error('Year')
                <span class="invalid-feedback" role="alert" style="color:red">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
            <button type="submit-wrapper" class="btn-submit">Submit</button>
        </div>
    </form>
</body>
</html>