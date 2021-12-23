<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Student Info') }}
            </h2>
            <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('students.index')}}">Back Info</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('students.store')}}" method="post">
                        @csrf
                        <div>
                            <label class="block" for="student_name">Student Name</label>
                            <input type="text" name="student_name" id="" class="focus">
                            <p class="text-red-600">{{$errors->first("name")}}</p>
                        </div>
                        <div class="mb-4">
                            <label class="block" for="student_email">Student Email</label>
                            <input type="text" name="student_email" id=""  class= "focus">
                            <p class="text-red-600">{{$errors->first("name")}}</p>
                        </div>
                        <div>
                            <button class = "px-4 py-2 bg-green-100" type="submit">Submit Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>