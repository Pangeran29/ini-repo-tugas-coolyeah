<!--     // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03
 -->
<h1>detail collection</h1>

<form action="/collection/store" method="POST">
  @csrf
  <input type="text" name="nama_koleksi" placeholder="nama_koleksi" value="{{$collection->nama_koleksi}}">
  <input type="text" name="jenis_koleksi" placeholder="jenis_koleksi" value="{{$collection->jenis_koleksi}}">
  <input type="text" name="jumlah_koleksi" placeholder="jumlah_koleksi" value="{{$collection->jumlah_koleksi}}">
  <!-- <input type="submit" value="save" name="submit"> -->
</form>