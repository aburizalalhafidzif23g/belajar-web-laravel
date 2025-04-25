<form action="{{ route('user.update', $pengguna->id) }}" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="name" value=" {{ $pengguna->name }}"/>
  <button type="submit">Simpan</button>

  @error('name')
   <span style="color:red">{{ $message }}</span>
  @enderror
</form>