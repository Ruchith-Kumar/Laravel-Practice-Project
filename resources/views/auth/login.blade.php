@extends('Layouts.app')

@section('content')

    <div class="flex justify-content">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register')}}" method="post">
                @if (session('status'))
                    <div class="text-red-500 p-4 rounded-lg text-white text-center">
                        {{session('status')}}
                    </div>
                @endif
                
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 
                    border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"value="{{old('email')}}">
                    
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 
                    border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror "value="">
                    
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror

                </div>

                <div class ="mb-6">
                    <div class="flex-center ">
                        <input type="checkbox" name="remember" id="remember" class="mr-2" checked="checked">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                    {{-- <br> --}}
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg roundedfont-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection