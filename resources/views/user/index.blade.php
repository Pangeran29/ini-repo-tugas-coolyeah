<!--     // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03
 -->
<table border="1">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>fullname</th>
        <th>email</th>
        <th>password</th>
        <th>address</th>
        <th>phoneNumber</th>
        <th>birthdate</th>
        <th>agama</th>
        <th>jenis_kelamin</th>
        <th>action</th>
    </tr>
    @foreach($user as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->username}}</td>
            <td>{{$w->fullName}}</td>
            <td>{{$w->email}}</td>
            <td>{{$w->password}}</td>
            <td>{{$w->address}}</td>
            <td>{{$w->phoneNumber}}</td>
            <td>{{$w->birthdate}}</td>
            <td>{{$w->agama}}</td>
            <td>{{$w->jenis_kelamin}}</td>
            <td><a href="/userView/{{$w->id}}">detail</a></td>
        </tr>
    @endforeach
</table>