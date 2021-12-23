<x-app-layout>
    <x-slot name="header">
        <div class ="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Marks Per Student') }}
        </h2>
        
        
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <thead>
                          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Student ID</th>
                            <th class="px-4 py-3">Subject</th>
                            
                            <th class="px-4 py-3">Marks</th>
                            <th class="px-4 py-3">Action</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            
                            @forelse ($list as $show)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">{{$show->student_id}}</td>
                                    <td class="px-4 py-3 text-ms font-semibold border">{{ $show->subject_id }}</td>
                                   
                                    <td class="px-4 py-3 text-ms font-semibold border">{{ $show->marks }}</td>
                                    
                                    
                                    <td class="px-4 py-3 text-sm border">
                                        <a class="px-2 py-1 bg-yellow-200" href= "">Edit</a>
                                       
                                        <a class="px-2 py-1 bg-red-200" href= "">Delete</a>
                                        
                                    </td>
                                </tr>  
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-3 text-center">{{__("No Marks found.")}}</td>
                                </tr>
                            @endforelse
                       
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>
