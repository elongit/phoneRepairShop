<x-adminLayout>
    <x-slot name='title'>
        Users List
    </x-slot>

    <section class="p-5 mt-5 md:text-lg">
        <div>
            <button class="p-2 px-4 text-white font-semibold bg-blue-500 my-2 rounded ">
                <a href="{{ route('user.create')  }} ">
                    <i class="fa-solid fa-pen"></i>
                </a>
            </button>
        </div>
        <table class="cursor-pointer text-sm w-full rounded-lg">
            <thead class="text-xs uppercase  bg-slate-800 text-white sticky top-0">
                <tr>
                    <th scope="col" class="px-4 py-3">User ID</th>
                    <th scope="col" class="px-4 py-3">Full Name</th>
                    <th scope="col" class="px-4 py-3">Email</th>
                    <th scope="col" class="px-4 py-3">Registered On</th>
                    <th scope="col" class="px-4 py-3">Role</th>
                    <th scope="col" class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr class="border-b font-semibold hover:bg-gray-100">
                    <td class="px-4 py-2">
                        {{$user->id}}
                    </td>
                    <td class="px-4 py-2">
                        {{$user->first_name .' ' .$user->last_name}}
                    </td>

                    <td class="px-4 py-2">
                        {{$user->email}}

                    </td>

                    <td class="px-4 py-2">
                        {{$user->created_at->format('Y-m-d')}}
                    </td>

                    <td class="px-4 py-2">
                        {{$user->roles->first()->name }}
                    </td>

                    <td class="px-4 py-2 grid grid-cols-2 gap-3">
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 px-4 w-full text-white font-semibold bg-red-500 rounded ">
                            <i class="fas fa-trash"></i> 
                        </button>
                    </form>

                      <a href="{{ route('user.edit' , $user->id) }}">
                      <button class="p-2 px-4 w-full text-white font-semibold bg-green-500 rounded ">
                            <i class="fas fa-edit"></i>
                        </button>
                      </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-adminLayout>