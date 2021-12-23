<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Student Class') }}
            </h2>
            {{-- <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('students.index')}}">Back Info</a>
            </div> --}}
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('studentClass.store')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label class="block" for="student_classes">Student Class</label>
                            <input type="text" name="student_classes" id="" class="focus">
                            {{-- <p class="text-red-600">{{$errors->first("name")}}</p> --}}
                        </div>
                        <div>
                            <label class="block" for="student_id">Student Name</label>
                            <select name="student_id" id="student_id">
                                <option value="">Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                @endforeach
                            </select>

                            <p class="text-red-600">{{$errors->first("student_id")}}</p>
                        </div>
                        <div>
                            <button class = "px-4 py-2 bg-green-100" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>