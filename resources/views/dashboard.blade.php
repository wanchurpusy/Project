<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<!-- form -->
    <div class="mb-6">
        <h3 class="text-lg font-medium mb-4"> Add New Student</h3>
        <form method="POST" action="#">
            @csrf

            <div>
                <label for="name" class="block text-gray-700">Name</label>
                <input type="email" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" >
            </div>
            <div>
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" >
            </div>
            <div>
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" >
            </div>
            <div>
                <label for="address" class="block text-gray-700">Address</label>
                <input type="email" id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" >
            </div>
            
            
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Student
                </button>
            </div>
        </form>
    </div>
    

    <!-- ang iyong ganda ay-->

    <div class="mt-8">
        <h3 class="text-lg font-medium mb-4">Student List</h3>
        <table class="min-w-full bg-white border">

            <thead>
                <tr>
                    <th class="py-2 border-b">Name</th>
                    <th class="py-2 border-b">Email</th>
                    <th class="py-2 border-b">Phone</th>
                    <th class="py-2 border-b">Address</th>
                    <th class="py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 border-b px-4">1</td>
                    <td class="py-2 border-b px-4">Jasper</td>
                    <td class="py-2 border-b px-4">Jasper@gmail.com</td>
                    <td class="py-2 border-b px-4">09319864254</td>
                    <td class="py-2 border-b px-4">Sibaguan Camella Roxas City</td>
                    <td class="py-2 border-b px-4">
                        <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                        <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                    </td>
                </tr>
                
                
                
                
                
            </tbody>
        </table>
    </div>
                
                
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                {{ __("You're logged in!") }}
                            </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    