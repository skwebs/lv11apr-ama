<x-custom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            @if (Route::has('student.create'))
                <a href="{{ route('student.create') }}"
                    class=" rounded-md px-3 py-4 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Add Student
                </a>
            @endif
            @if (Route::has('student.trashed'))
                <a href="{{ route('student.trashed') }}"
                    class=" rounded-md px-3 py-4 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Trashed Student ({{ $trashed_number }})
                </a>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table
                            class="text-center w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-2 py-3">
                                        S.N
                                    </th>
                                    <th scope="col" class="px-2 py-3">
                                        ID
                                    </th>
                                    {{-- <th scope="col" class="px-2 py-3">
                                        UUID
                                    </th> --}}
                                    <th scope="col" class="px-2 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-2 py-3">
                                        Gender
                                    </th>
                                    <th scope="col" class="px-2 py-3">
                                        Date of Birth
                                    </th>
                                    <th scope="col" class="px-2 py-3">
                                        Aadhaar
                                    </th>
                                    <th scope="col" class="px-2 py-3">
                                        Created Date
                                    </th>
                                    <th scope="col" class="px-2 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="text-center px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="text-center px-2 py-4">
                                            {{ $student->id }}
                                        </td>
                                        {{-- <td class="px-2 py-4">
                                            {{ $student->uuid }}
                                        </td> --}}
                                        <td class="px-2 py-4">
                                            {{ $student->name }}
                                        </td>
                                        <td class="px-2 py-4">
                                            {{ $student->gender }}
                                        </td>
                                        <td class="px-2 py-4">
                                            {{ $student->date_of_birth }}
                                        </td>
                                        <td class="px-2 py-4">
                                            {{ $student->aadhaar_number }}
                                        </td>
                                        <td class="px-2 py-4">
                                            {{ $student->created_at }}
                                        </td>
                                        <td class="px-2 py-4 flex gap-x-3">
                                            <a href="{{ route('student.show', $student->uuid) }}"
                                                class="font-medium text-green-600 dark:text-green-500 hover:underline">View</a>

                                            <a href="{{ route('student.parents.add', $student->uuid) }}"
                                                class="font-medium text-amber-600 dark:text-amber-500 hover:underline">Edit
                                                Parents</a>

                                            <a href="{{ route('student.edit', $student->uuid) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                            <form action="{{ route('student.destroy', $student->uuid) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Trash</button>

                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="10" scope="col" class="px-2 py-3">
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
