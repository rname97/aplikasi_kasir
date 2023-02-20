<!DOCTYPE html>

<html>
    <head>
        <title>Tutorial Laravel</title>
    </head>
    <body>
        <h1>Data Karyawan</h1>
        <ul>
            @foreach($karyawan as $p)
                <li>{{ "Nama :". $p->name . "| Alamat : " . $p->alamat }}</li>
            @endforeach
        </ul>
    </body>

</html>