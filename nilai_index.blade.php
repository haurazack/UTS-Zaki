<style>
    body { text-align:center; font-family:Arial; }
    table { margin:auto; border-collapse:collapse; }
    th, td { padding:10px; }
</style>


<h1>Data Nilai</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Pelajaran</th>
        <th>Nilai</th>
    </tr>

    @foreach($data as $index => $d)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $d->nama_siswa }}</td>
        <td>{{ $d->pelajaran }}</td>
        <td>{{ $d->nilai }}</td>
    </tr>
    @endforeach
</table>
<a href="/">⬅️ Kembali ke Beranda</a>