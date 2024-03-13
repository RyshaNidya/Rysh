<html>
  <table align="center" cellpadding='10' border="1">
    <thead>
      <th>ID</th>
      <th>Nama</th>
      <th>Harga</th>
    </thead>
    <tbody>
      @foreach ($dataa as $i)
          <tr>
            <td>{{ $i['id'] }}</td>
            <td>{{ $i['nama'] }}</td>
            <td>{{ $i['harga'] }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
</html>