<h1> Show All Students " Soft Delete " </h1>

<table>

    <th>ID</th>
    <th>Full Name</th>
    <th>Position</th>
    <th>Company</th>

    @foreach($Student as $item )
    <tr> 
        <td> {{$item->id}}</td>
        <td> {{$item->Fame}}</td>
        <td> {{$item->position}}</td>
        <td> {{$item->company}}</td>
        <td> 
        </td>
    </tr>
    @endforeach
</table>


