<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a task</title>
    <style>
        input{
            width: 300px;
            margin-bottom: 10px;
            height:30px;
            border: 1px solid rgb(161, 161, 161);
            border-radius: 8px;
        }
        div{
            width: 25%; 
            margin:auto; 
            margin-top:100px; 
            border:1px solid rgb(212, 212, 212);
            border-radius: 5px;
            padding: 20px
        }
    </style>
</head>
<body>
<div>
    <h1 style="text-align: center">Edit a task</h1>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $task->name }}"> <br>
        <input type="text" name="period" value="{{ $task->period }}"> <br>
        <input type="text" name="date" value="{{ $task->date }}"> <br>
        <input type="text" name="done" value="{{ $task->done }}"> <br>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>


