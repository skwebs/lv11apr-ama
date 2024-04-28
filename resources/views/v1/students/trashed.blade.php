<x-custom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Route::has('student.index'))
                <a href="{{ route('student.index') }}"
                    class=" rounded-md px-3 py-4 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Student List
                </a>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        S.N
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        UUID
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Gender
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date of Birth
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Aadhaar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        {{-- <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $student->id }}
                                        </td> --}}
                                        <td class="px-6 py-4">
                                            {{ $student->uuid }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $student->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $student->gender }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $student->date_of_birth }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $student->aadhaar_number }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $student->created_at }}
                                        </td>
                                        <td class="px-6 py-4 flex gap-x-3">

                                            <form action="{{ route('student.restore', $student->uuid) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="font-medium text-green-600 dark:text-green-500 hover:underline">Restore</button>
                                            </form>

                                            <form action="{{ route('student.deleteForever', $student->uuid) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete
                                                    Forever</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="10" scope="col" class="px-6 py-3">
                                            No records found
                                        </th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-custom-layout>
