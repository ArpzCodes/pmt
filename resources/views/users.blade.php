<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{url('/create')}}"> Create </a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>DOB</th>
        <th>Address</th>
    </tr>


    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->address}}</td>
            <td><img src="{{asset($student->image)}}"></td>
            {{--            <td><img src=""{{asset($student->image)}}"/></td>--}}
        </tr>
    @endforeach
</table>
</body>
</html><?php