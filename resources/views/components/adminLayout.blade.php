<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="shadow  p-3 flex justify-between items-center">
        <h1 class="  font-bold italic text-3xl ">
          <a href="{{ route('dashboard') }}" class="text-green-600 hover:text-green-500" aria-label="Home">
           Green phone
            
          </a>
        </h1>
        <nav>
            <ul class="flex items-center gap-3 cursor-pointer">              
                @auth

                <li>
                    <a href="{{ route('addService.create') }}" class="font-semibold rounded ">
                        Add service
                    </a>
                </li>

                
                <li>
                    <a href="{{ route('addRole') }}" class="font-semibold rounded ">
                        Add roles
                    </a>
                </li>



                <li>
                    <a href="{{ route('addAppointment.create') }}" class="font-semibold rounded ">
                        Add time
                    </a>
                </li>
                <li>
                    <a href="{{ route('users') }}" class="font-semibold rounded ">
                        Users List
                    </a>
                </li>

                <li>
                    <a href="{{ route('orders') }}" class="font-semibold rounded ">
                        Orders managment
                    </a>
                </li>
                <form action="/logout" method="post" id="delete-form">
                        @csrf
                        <button type="submit" form="delete-form">
                            <li class="font-semibold">LogOut </li>
                        </button>
                    </form>
                @endauth
            </ul>
        </nav>
      </header>

      @if(session('success'))
            <div class="bg-green-300 my-5 text-white font-semibold py-3 px-2 text-center rounded-md w-1/2 mx-auto ">
                {{ session("success") }}
            </div>
        @endif
    <main class="p-2 grid grid-cols-1 gap-5 md:p-5 pb-5">
        {{$slot}}
    </main>


</body>
</html>
