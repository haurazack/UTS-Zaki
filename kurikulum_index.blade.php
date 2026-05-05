<style>
    body { text-align:center; font-family:Arial; }
    table { margin:auto; border-collapse:collapse; }
    th, td { padding:10px; }
</style>


<h1>Data Kurikulum</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kurikulum</th>
        <th>Tahun</th>
    </tr>

    @foreach($data as $index => $d)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $d->nama_kurikulum }}</td>
        <td>{{ $d->tahun }}</td>
    </tr>
    @endforeach
</table>
<a href="/">⬅️ Kembali ke Beranda</a>