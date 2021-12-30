@extends('layout.layout')

@section('content')
<h1>ToDo List</h1>

<button style="border: none; margin-left:150px; padding: 5px 25px 5px 25px;"><a href="tasks/create" style="text-decoration: none; color:black; ">➕ Add a task</a></button>
<table>
    <tr>
        <th style="width: 50%">Task</th>
        <th style="width: 10%">Period/days</th>
        <th style="width: 20%">Starting Date</th>
        <th style="width: 10%">Done</th>
        <th style="width: 10%">Actions</th>
    </tr>
    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->period }}</td>
        <td>{{ $task->date }}</td>
        <td>{{ $task->done }}</td>
        <td style="padding: 5px"> 
            <button style="border: none; margin-bottom:5px"><a href="tasks/{{ $task->id }}/edit" style="text-decoration: none; color:rgb(16, 139, 22); font-style:italic">✔Edit</a></button>
            <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" style="border: none; color:rgba(255, 0, 0, 0.589);margin-bottom:5px; font-style:italic">❌Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
