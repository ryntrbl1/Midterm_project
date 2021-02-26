<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="section" id="cover">
    <style>
.section#cover {
    height: 100vh;
    background-image: linear-gradient(135deg, #FFC2B0CF, #945374C7);
    background-blend-mode: darken;
}
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Mentol Library</a>
  </div>
</nav>
    <div>
    <img src="fgv.png" class="section" id="cover">
    <table class="table table-sm">
        <thead>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Halaman</th>
            <th>Tahun</th>
            <th></th>
            <th>Action</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->judul}}</td>
                <td>{{$data->penulis}}</td>
                <td>{{$data->halaman}}</td>
                <td>{{$data->tahun}}</td>
                <td><a href="{{route('book.update', $data->id)}}" >Update</a>
                </td>
                <td>
                <a href="{{route('detailbook', $data->id)}}">Show</a></td>
                <td>
                    <form action="{{route('book.delete', $data->id)}}" method="post" >
                        @csrf
                        @method('delete')
                        <button type="submit-wrapper"             style= "background-color: #F7F5F5;border-radius: 10px;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <td>
        <a href="{{route('book.create')}}">
            <button type="submit-wrapper"             style= "background-color: #F7F5F5;border-radius: 10px;">Create New</button>
        </form>
    </td>
    </div>
</body>
</html>