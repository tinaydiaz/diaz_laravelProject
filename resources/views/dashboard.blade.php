<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

               
            <!-- ADD STUDENT FORM -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-4">Add New Student</h3>
                <form method="POST" action="#">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name"class="block text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                    
                        <div>
                            <label for="email"class="block text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="phone"class="block text-gray-700">Phone</label>
                            <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="address"class="block text-gray-700">Address</label>
                            <input type="text" id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Student</button>
                    </div>
                </form>
            </div>

            <!-- Student List Table -->
            <div class="my-8">
                <h3 class="text-lg font-medium mb-4">Student List</h3>
                <table class="min-w-full bg-white border">
                    <thead>
                        <tr>
                            <th class="py-2 border-b">#</th>
                            <th class="py-2 border-b">Name</th>
                            <th class="py-2 border-b">Email</th>
                            <th class="py-2 border-b">Phone</th>
                            <th class="py-2 border-b">Address</th>
                            <th class="py-2 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 border-b px-14">1</td>
                            <td class="py-2 border-b px-14">John Doe</td>
                            <td class="py-2 border-b px-14">johndoe@example.com</td>
                            <td class="py-2 border-b px-14">123-456-7890</td>
                            <td class="py-2 border-b px-14">123 Main St.</td>
                            <td class="py-2 border-b px-14">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            </div>

        </div>
    </div>
</x-app-layout>
