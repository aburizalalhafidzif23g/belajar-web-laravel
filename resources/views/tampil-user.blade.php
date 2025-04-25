<table>
  <tr>
    <th>Nama</th>
    <th>Email</th>
  </tr>
  @foreach ($pengguna as $row)
  <tr>
    <td>{{ $row->name }}</td>
    <td>{{ $row->email }}</td>
    <td>
      <a href="{{ route('user.edit', $row->id) }}">Edit</a>
      <form action="{{ route('user.destroy', $row->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="hapus">       
      </form>
    </td>
  </tr>
  @endforeach
</table>