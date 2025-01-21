<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 py-10 px-4">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Todo List</h1>

        <!-- Add Task Form -->
        <form action="{{ route('todo.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="flex items-center space-x-4">
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Enter task name" 
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                >
                <button type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Add Todo
                </button>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 text-left">
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Name</th>
                        <th class="px-4 py-2 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todo as $task)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $task->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $task->name }}</td>
                            <td class="px-4 py-2 border-b space-x-4 flex items-center">
                                <!-- Edit Button -->
                                <a href="{{ route('todo.edit', $task->id) }}" 
                                   class="text-blue-600 hover:underline flex items-center space-x-1">
                                    <i class="fas fa-edit"></i>
                                    <span>Edit</span>
                                </a>
                            
                                <!-- Delete Button -->
                                <form action="{{ route('todo.destroy', $task->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-600 hover:underline flex items-center space-x-1">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
