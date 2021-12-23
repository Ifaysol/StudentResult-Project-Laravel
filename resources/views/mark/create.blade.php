<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Make Marks') }}
            </h2>
            <div>
                <a class="px-4 py-2 bg-green-300" href="{{route('marks.index')}}">Back to marks</a>
            </div>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('marks.store')}}" method="post">
                        @csrf
                        
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
                            <label class="block" for="subject_id">Subject Name</label>
                            <select name="subject_id" id="subject_id">
                                <option value="">Select Subject</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>

                            <p class="text-red-600">{{$errors->first("student_id")}}</p>
                        </div>

                        <div>
                            <label class="block" for="marks">Marks</label>
                            <input type="text" name="marks" id="marks" class="focus">
                            
                            <p class="text-red-600">{{$errors->first("marks")}}</p>
                        </div>
                        <div>
                            <button class = "px-4 py-2 mt-2 bg-green-100" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>