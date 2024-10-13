@extends('admin.layout_admin')
@section('content')
    <div x-data='{
        isSave : false,
        data: {
            id : ""
        },
        data_error: {},
        saveForm: function() {
            let url_post = "{{ route("admin.user.save") }}";
            fetch(url_post, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": document.head.querySelector("meta[name=csrf-token]").content
                },
                body: JSON.stringify(this.data),
            })
            .then((response) => response.json())
            .then(data => {
                $("#message_save").empty().text(data.message)
                if(data.success == true) {
                    this.data_error = {};
                    $("#data_table").DataTable().ajax.reload();
                } else {
                    this.data_error = Object.fromEntries(
                        Object.entries(data.errors).map(([key, value]) => [key, value[0]])
                    );

                    console.log(this.data_error)
                }
            }).catch((error) => {
                console.error("Error:", error)
            });
        },

        openPopup: function() {
            this.isSave = true;
            this.data.id = "";
        },

        closePopup: function() {
            this.isSave = false;
            this.data.id = "";
        },

        editRow: function(id) {
            this.isSave = true;
            this.data.id = id;
            let url_post = "{{ route("admin.user.edit") }}";
            fetch(url_post, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": document.head.querySelector("meta[name=csrf-token]").content
                },
                body: JSON.stringify({id: id}),
            })
            .then((response) => response.json())
            .then(data => {
                this.data = data;
            }).catch((error) => {
                console.error("Error:", error)
            });
        },


         deleteRow: function(id) {
            let url_post = "{{ route("admin.user.delete") }}";
            fetch(url_post, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": document.head.querySelector("meta[name=csrf-token]").content
                },
                body: JSON.stringify({id: id}),
            })
            .then((response) => response.json())
            .then(data => {
                $("#data_table").DataTable().ajax.reload();
            }).catch((error) => {
                console.error("Error:", error)
            });
        },


    }'>

        <div x-show="isSave" class="fixed z-10 inset-0 overflow-y-auto">
            <div class="relative w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-6 mt-16">
                <h2 class="text-2xl font-bold text-center mb-4">Create</h2>
                <span x-on:click="closePopup" class="absolute top-4 right-4 font-bold text-2xl">×</span>
                <div>
                    <div class="text-red-500" id="message_save"></div>
                    <input type="hidden" x-model="data.id">
                    <!-- Họ Tên -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full name:</label>
                        <input type="text" x-model="data.name" id="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="enter full name" required>
                        <div class="text-red-500" x-text="data_error.name"></div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="cccd" class="block text-gray-700 text-sm font-bold mb-2">CCCD:</label>
                        <input type="text" x-model="data.cccd" id="cccd" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="enter cccd" required>
                        <div class="text-red-500" x-text="data_error.cccd"></div>
                    </div>

                    <!-- Mật khẩu -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                        <input type="password" x-model="data.password" name="password" id="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="enter password" required>
                        <div class="text-red-500" x-text="data_error.password"></div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                        <input type="tel" x-model="data.phone" id="phone" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="enter phone" required>
                        <div class="text-red-500" x-text="data_error.phone"></div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                        <input type="text" x-model="data.address" id="address" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="enter address" required>
                        <div class="text-red-500" x-text="data_error.address"></div>
                    </div>
                    <!-- Nút Đăng Ký -->
                    <div class="mb-4">
                        <button type="button" x-on:click="saveForm" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold mb-4">Table User</h1>
                <button class="text font-bold mb-4"></button>
                <button type="button" x-on:click="openPopup" class="inline-flex items-center px-5 py-2.5 mx-1 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Create User
                </button>
            </div>
            <div class="">
                <table id="data_table" class="w-full border border-gray-300 table-auto" style="min-width: 1500px !important">
                    <thead>
                        <tr class="bg-sidebar text-white">
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Phone</th>
                            <th class="py-2 px-4 border-b">CCCD</th>
                            <th class="py-2 px-4 border-b">Address</th>
                            <th class="py-2 px-4 border-b">Option</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
            $(document).ready(function() {
            var CallDataTableURL = '{!! route('admin.user') !!}';
            var table = $('#data_table').DataTable({
                paging: true,
                pagingType: 'simple',
                pageLength: 10,
                scrollX: true,
                processing: true,
                serverSide: true,
                searching: false,
                autoWidth: true,
                ajax: {
                    url: CallDataTableURL, // Đường dẫn đến API hoặc tệp tin JSON cung cấp dữ liệu
                        data: function(d){
                    },
                },
                columns: [
                    {data: "id"},
                    {data: "name"},
                    {data: "phone"},
                    {data: "cccd"},
                    {data: "address"},
                    {
                        data: null,
                        className: "dt-center editor-delete flex justify-start",
                        render : function ( data, type, row ) {
                            let html = `
                                <button type="button" x-on:click="editRow(${row.id})" class="inline-flex items-center px-5 py-2.5 mx-1 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                                    Edit
                                </button>

                                 <button type="button" x-on:click="deleteRow(${row.id})" class=" ml-4 inline-flex items-center px-5 py-2.5 mx-1 text-sm font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                    Remove
                                </button>
                                `;
                            return html;
                        }
                    }
                ],
            });
        });
    </script>
@endsection
