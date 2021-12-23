<x-app-layout>
    <x-slot name="header">
        <div class ="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Info') }}
        </h2>
        <div class="flex">
            <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('student.show')}}">Import File</a>
            </div>
            <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('subjects.create')}}">Create Subject</a>
            </div>
            <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('marks.create')}}">Make Marks</a>
            </div>
            </h2>
            <div>
                <a class="px-4 py-2 bg-green-300" href="{{route('students.create')}}">Create Student Info</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <thead>
                          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Sl</th>
                            <th class="px-4 py-3">Student Name</th>
                            <th class="px-4 py-3">Student Email</th>
                            <th class="px-4 py-3">Action</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse ($list as $student)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">{{$student->id}}</td>
                                    <td class="px-4 py-3 text-ms font-semibold border">{{$student->name}}</td>
                                    <td class="px-4 py-3 text-ms font-semibold border">{{$student->email}}</td>
                                    
                                    <td class="px-4 py-3 text-sm border">
                                        <a class="px-2 py-1 bg-yellow-200" href= "{{route('students.edit', $student->id)}}">Edit</a>
                                       
                                        <a class="px-2 py-1 bg-red-200" href= "">Delete</a>

                                        <a class="px-2 py-1 bg-blue-200" href= "{{route('students.show', $student->id)}}">View</a>
                                        
                                    </td>
                                </tr>  
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-3 text-center">{{__("No Student found.")}}</td>
                                </tr>
                            @endforelse
                       
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>
