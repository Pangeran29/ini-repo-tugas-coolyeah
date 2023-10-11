<!--     // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03
 -->
<a href="koleksiTambah">Create new collection</a>
<table border="1">
    <tr>
        <th>id</th>
        <th>nama koleksi</th>
        <th>jenis koleksi</th>
        <th>jumlah koleksi</th>
        <th>action</th>
    </tr>
    @foreach($collection as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nama_koleksi}}</td>
            <td>{{$c->jenis_koleksi}}</td>
            <td>{{$c->jumlah_koleksi}}</td>
            <td><a href="/koleksiView/{{$c->id}}">detail</a></td>
        </tr>
    @endforeach
</table>