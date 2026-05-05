<style>
    body {
        text-align: center;
        font-family: Arial;
    }

    table {
        margin: auto;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
    }
</style>

<h1>Data Kelas</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
    </tr>

    @foreach($data as $index => $d)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $d->nama_kelas }}</td>
        <td>{{ $d->jurusan }}</td>
    </tr>
    @endforeach
</table>
<a href="/">⬅️ Kembali ke Beranda</a>