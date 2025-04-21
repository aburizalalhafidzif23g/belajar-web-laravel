<table>
  <tr>
    <th>Nama</th>
    <th>Email</th>
  </tr>
  @foreach ($pengguna as $row)
  <tr>
    <td>{{ $row->name }}</td>
    <td>{{ $row->email }}</td>
  </tr>
  @endforeach
</table>