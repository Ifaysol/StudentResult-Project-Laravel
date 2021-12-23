<x-app-layout>
    <x-slot name="header">
        <div class ="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subject List') }}
        </h2>
        <div class="flex justify-between">
            <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('subjects.create')}}">Create Subject</a>
            </div>
            <div class="px-2">
                <a class="px-4 py-2 bg-green-300" href="{{route('marks.index')}}">Marks List</a>
            </div>
            <div>
                <a class="px-4 py-2 bg-green-300" href="{{route('students.create')}}">Create Student Info</a>
            </div>
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
                            <th class="px-4 py-3">Subject ID</th>
                            <th class="px-4 py-3">Subject Name</th>
                            
                            <th class="px-4 py-3">Action</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse ($list as $subject)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">{{$subject->id}}</td>
                                    <td class="px-4 py-3 text-ms font-semibold border">{{$subject->name}}</td>
                                    
                                    
                                    <td class="px-4 py-3 text-sm border">
                                        <a class="px-2 py-1 bg-yellow-200" href= "{{route('subjects.edit', $subject->id)}}">Edit</a>
                                       
                                        <a class="px-2 py-1 bg-red-200" href= "">Delete</a>
                                        
                                    </td>
                                </tr>  
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-3 text-center">{{__("No Subject found.")}}</td>
                                </tr>
                            @endforelse
                       
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>
