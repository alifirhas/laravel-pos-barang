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
                                        Username
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Related ID
                                    </th>
                                    <th>
                                        Related Type
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($actionLogs as $log)
                                    <tr>
                                        <td></td>
                                        <td>
                                            {{ $log->user_id }}
                                        </td>
                                        <td>
                                            {{ $log->username }}
                                        </td>
                                        <td>
                                            {{ $log->action }}
                                        </td>
                                        <td>
                                            {{ $log->description }}
                                        </td>
                                        <td>
                                            {{ $log->related_id }}
                                        </td>
                                        <td>
                                            {{ $log->related_type }}
                                        </td>
                                        <td>
                                            {{ $log->created_at }}
                                        </td>
                                    </tr>
                                @endforeach
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
