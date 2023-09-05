<h1> Edit Students </h1>

<form action="{{route('student.update' ,$Student->id )}}" method="post">


    <!-- Important for request and increption تشفير   -->
    @csrf
    @method('PUT')
    <!-- @method('PATCH') -->
    <input type="text" name="Fame" value="{{$Student->Fame}}" /><br><br>
    <input type="text" name="position" value="{{$Student->position}}" /><br><br>
    <input type="text" name="company" value="{{$Student->company}}" /><br><br>

    <button type="submit"> UPDATE </button>

</form>