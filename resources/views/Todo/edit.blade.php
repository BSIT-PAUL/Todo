<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-96">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Todo</h1>
        <form action="{{ route('todo.update', $todo->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{ $todo->name }}" 
                    required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                >
            </div>
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    Update Task
                </button>
            </div>
        </form>
    </div>
</body>
</html>
