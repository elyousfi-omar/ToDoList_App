<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div >
        <h1 style="text-align: center">Add a task</h1>
        <form action="/tasks" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Task"> <br>
            <input type="text" name="period" placeholder="Period of the task in days"> <br>
            <input type="text" name="date" placeholder="Starting date of the task"> <br>
            <input type="text" name="done" placeholder="Is it done?"> <br>
            <input type="submit" value="Submit" style="background-color: rgb(94, 40, 182); color:white; font-size:13px">
        </form>
    </div>
</body>
</html>