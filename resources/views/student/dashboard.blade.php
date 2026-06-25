<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                {{-- Welcome Header --}}
                <div class="mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">
                        Welcome, {{ auth()->user()->name }}
                    </h1>
                    <p class="text-gray-600 text-sm">Welcome to your personal student portal dashboard.</p>
                </div>
                
                <hr class="mb-6 border-gray-200">

                {{-- Original Student Profile Card --}}
                <div class="max-w-xl bg-gray-50 border border-gray-200 rounded-lg p-6  mb-6">
                    <h3 class="text-lg font-bold  mb-4 border-b pb-2 text-blue-600">
                        My Profile Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <p class="text-gray-600">
                            <strong class="text-gray-800">Full Name:</strong> {{ auth()->user()->name }}
                        </p>
                        
                        <p class="text-gray-600">
                            <strong class="text-gray-800">Email Address:</strong> {{ auth()->user()->email }}
                        </p>

                        <p class="text-gray-600">
                            <strong class="text-gray-800">Father's Name:</strong> {{ auth()->user()->father_name ?? 'N/A' }}
                        </p>

                        <p class="text-gray-600">
                            <strong class="text-gray-800">Gender:</strong> {{ auth()->user()->gender ?? 'N/A' }}
                        </p>

                        <p class="text-gray-600">
                            <strong class="text-gray-800">Date of Birth (DOB):</strong> {{ auth()->user()->dob ?? 'N/A' }}
                        </p>

                        <p class="text-gray-600 col-span-1 md:col-span-2">
                            <strong class="text-gray-800">My Hobbies:</strong> 
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold">
                                @if(auth()->user()->hobbies && auth()->user()->hobbies->count() > 0)
                                    @foreach(auth()->user()->hobbies as $hobby)
                                        {{ $hobby->name ?? $hobby->hobbies }}{{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                @else
                                    No Hobbies Added
                                @endif
                            </span>
                        </p>
                    </div>
                </div>

                {{-- Action Button --}}
                <div>
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-blue-600  text-white ">
                        Edit My Account Settings
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>