<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 relative flex flex-col justify-center min-h-screen overflow-hidden py-6 sm:py-12">
    <div class="bg-white dark:bg-gray-800 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-xl sm:rounded-lg px-6 pt-10 pb-8 relative h-[800px] overflow-y-auto">
        <h1 class="text-3xl font-semibold text-white mb-4">To-Do List</h1>

        <!-- Start Add Task feature -->
        <form action="/task" method="POST" class="flex mb-4">
            @csrf
            <input type="text" name="name" placeholder="Add new task..." class="w-full p-3 border rounded-md mr-2 focus:outline-none focus:border-blue-500 text-gray-800">
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-3 rounded-md focus:outline-none">Add</button>
        </form>
        <!-- End Add Task feature -->

        <!-- Mapping List task with foreach -->
        <ul>
            @foreach ($tasks as $task)
            <li class="flex items-center justify-between border rounded p-4 mb-2 bg-white">
                <span class="text-gray-800">{{ $task->name }}</span>

                <!-- Start delete task feature -->
                <form action="/task/{{ $task->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">Delete</button>
                </form>
                <!-- End delete task feature -->

            </li>
            @endforeach
        </ul>
        <!-- End Mapping list task -->
    </div>
</body>

</html>