<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Assignment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/assignment" method="POST">
                    <div class="form-group">
                        <textarea name="description" placeholder="Describe your Assignment"></textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                    </div>
                    <div class="form-group">
                        <button type="submit">Add Assignment</button>

                    </div>
                    {{ csrf_field() }}
                </form>             
               
            </div>
        </div>
    </div>
</x-app-layout>
