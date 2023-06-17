<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Log Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Tampilkan data action log barang -->
                    <div class="relative overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                    </th>
                                    <th>
                                        User ID
                                    </th>
                                    <th>
                                        User Email
                                    </th>
                                    <th>
                                        Action type
                                    </th>
                                    <th>
                                        Barang ID
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($actionLogs) <= 0)
                                    <tr>
                                        <td colspan="6" class="text-center">Masih belum ada data</td>
                                    </tr>
                                @else
                                    @foreach ($actionLogs as $log)
                                        <tr>
                                            <td></td>
                                            <td>
                                                {{ $log->user_id }}
                                            </td>
                                            <td>
                                                {{ $log->user_email }}
                                            </td>
                                            <td>
                                                {{ $log->activity_type }}
                                            </td>
                                            <td>
                                                {{ $log->object_id }}
                                            </td>
                                            <td>
                                                {{ $log->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Tampilkan link navigasi paginasi -->
                    <div class="mt-4">
                        {{ $actionLogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
