<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Con me</title>
</head>
<body>
    <form action="" method="get">
        @csrf
        <input type="text" name="search" placeholder="Cari nama....">
        <button type="submit">Cari</button>
        <a href="{{route('add')}}">Tambah Data Baru</a>
        <a href="{{ route('trash') }}" style="background: orange; color: white;">Lihat Data Terhapus</a>
    </form>
    <br>
    @if (Session::get('success'))
        <div style="width: 100%; background: green; color:white; padding: 10px;">
            {{ Session::get('success') }}
        </div>
        @endif
</body>
<body>
@foreach ($students as $student)

    <ol>
        <li>NAMA : {{ $student['nama']}}</li>
        <li>NIS : {{ $student['nis']}}</li>
        <li>ROMBEL : {{ $student['rombel']}}</li>
        <li>RAYON : {{ $student['rayon']}}</li>
        <li> Aksi : <a href="{{route('edit', $student['id'])}}">Edit<a/>||
        <form action="{{route('delete', $student['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form> 
     </li>
    </ol>
    @endforeach
</body>
</html>