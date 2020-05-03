<table>
    <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Koor</th>
    </tr>
    @foreach($data_doskoor as $dosen_koor)
    <tr>
        <td>{{$dosen_koor->nik}}</td>
        <td>{{$dosen_koor->nama_dos}}</td>
        <td>{{$dosen_koor->email}}</td>
        <td>{{$dosen_koor->koor}}</td>
    </tr>
    @endforeach
</table>