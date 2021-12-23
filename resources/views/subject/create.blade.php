<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Subject Info') }}
            </h2>
            <div>
                <a class="px-4 py-2 bg-green-300" href="{{route('subjects.index')}}">Back to List</a>
            </div>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('subjects.store')}}" method="post">
                        @csrf
                    
                       
                        <div class="mb-4">
                            <label class="block" for="name">Subject Name</label>
                            <input type="text" name="name" id=""  class= "focus">
                            <p class="text-red-600">{{$errors->first("name")}}</p>
                        </div>
                        <div>
                            <button class = "px-4 py-2 bg-green-100" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>