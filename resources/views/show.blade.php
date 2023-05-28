<h5 style="text-align: center" >Student Table</h5>

<table style="text-align: center" class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $rs)
    <tr>
        <th scope="row">{{$rs->id}}</th>
        <td>{{$rs->fullname}}</td>
        <td>{{$rs->email}}</td>
        <td>{{$rs->gender}}</td>
    </tr>
    @endforeach

    </tbody>

</table>
<a href="index">click here to return to home page </a>
