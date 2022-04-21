<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <div class ="flex">
                    <div class ="flex-auto text-2xl mb-4"> Assignments List</div>  
                        <div class="flex-auto mt-2 text-right">
                                <a href="/assignment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Assignment</a>
                        </div>
                    </div>
                    <table class="w-full text-md rounded mb-4">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left p-3">Assignment</th>
                                <th class="text-left p-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->assignments as $assignment)
                                <tr>
                                    <td>{{$assignment->description}}</td>
                                    <td>
                                        <a href="/assignment/{{$assignment->id}}" name="edit">Edit</a>
                                        <form action="/assignment/{{$assignment->id}}" method="POST"><button type="submit" name="delete">Delete</button> {{ csrf_field() }}</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>              
               
            </div>
        </div>
    </div>
</x-app-layout>
