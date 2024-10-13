@extends('admin.layout_admin')
@section('content')
    <div x-data='{
        confirmed: function(id_booking) {

            console.log(id_booking);
            let url_post = "{{ route("admin.booking.confirmed") }}";
            fetch(url_post, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": document.head.querySelector("meta[name=csrf-token]").content
                },
                body: JSON.stringify({id: id_booking}),
            })
            .then((response) => response.json())
            .then(data => {
                if(data.success == true) {
                    $("#data_table").DataTable().ajax.reload();
                }
            }).catch((error) => {
                console.error("Error:", error)
            });
        }
    }'>
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Table Booking</h1>
            <div class="">
                <table id="data_table" class="w-full border border-gray-300 table-auto" style="min-width: 1500px !important">
                    <thead>
                        <tr class="bg-sidebar text-white">
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Phone</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Service</th>
                            <th class="py-2 px-4 border-b">Staff</th>
                            <th class="py-2 px-4 border-b">Date</th>
                            <th class="py-2 px-4 border-b">Time</th>
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
            var CallDataTableURL = '{!! route('admin.booking') !!}';
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
                    {data: "full_name"},
                    {data: "phone"},
                    {data: "email"},
                    {data: "service_name"},
                    {data: "user_name"},
                    {data: "date"},
                    {data: "time_custom"},
                    {
                        data: null,
                        render: function (data, type, row) {
                            let html = '';
                            if (row.status == 0) {
                                html = `
                                <button type="button" onclick="confirmed('${row.id}')" class="inline-flex items-center px-5 py-2.5 mx-1 text-sm font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                not confirmed
                                </button>`;
                            } else {
                                html = `
                                <button type="button" class="inline-flex items-center px-5 py-2.5 mx-1 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                                    confirmed
                                </button>`;
                            }

                            return html; // Đảm bảo luôn trả về đúng giá trị
                        }
                    },
                ],
            });
        });
    </script>
@endsection
