<x-layout>
    <x-slot name="header">Verifikasi Pembayaran
    </x-slot>

    <div>
        <div class="flex gap-5">
            <span class="w-10 h-3 mt-2 bg-blue-900 rounded-3xl"></span>
            <div>
                <h1 class="mb-2 text-xl font-semibold text-gray-900">Verifikasi Pembayaran</h1>
                <p>Silahkan mengecek data pendaftaran beserta bukti pembayaran para calon siswa.</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-6 py-3">No</th>
                            <th class="px-6 py-3">Nomor Registrasi</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Bukti Pembayaran</th>
                            <th class="px-6 py-3">Detail Pendaftaran</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="table-data" class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function anchor(url, text) {
            return '<a href="' + url + '" class="text-blue-600 hover:text-blue-800">' + text + '</a>';
        }

        function btnAction(url, type, text) {
            if (type == 'success') {
                type = 'bg-green-600 hover:bg-green-700';
            } else if (type == 'danger') {
                type = 'bg-red-600 hover:bg-red-700';
            }
            return '<a href="' + url + '" class="' + type + ' text-white  py-2 px-4 rounded">' +
                text + '</a>';
        }

        $.ajax({
            url: "{{ route('payment.data') }}",
            type: "GET",
            success: function(response) {
                var html = "";
                var i;
                for (i = 0; i < response.data.length; i++) {
                    var index = i + 1;
                    var payment = response.data[i];

                    var paymentShowUrl = "{{ route('payment.show', ':id') }}".replace(':id', payment.id);
                    var userShowUrl = "{{ route('user.show', ':id') }}".replace(':id', payment.user.id);
                    var paymentAcceptUrl = "{{ route('payment.accepted', ':id') }}".replace(':id', payment.id);
                    var paymentRejectUrl = "{{ route('payment.rejected', ':id') }}".replace(':id', payment.id);
                    var isValidated = payment.status == 'pending' ? btnAction(paymentAcceptUrl, 'success',
                        'Validasi') + " " + btnAction(paymentRejectUrl, 'danger', 'Tolak') : payment.status;

                    html += "<tr>" +
                        "<td class='px-6 py-4'>" + index + "</td>" +
                        "<td class='px-6 py-4'>" + payment.user.id + "</td>" +
                        "<td class='px-6 py-4'>" + payment.user.name + "</td>" +
                        "<td class='px-6 py-4'>" + anchor(paymentShowUrl, 'Lihat') + "</td>" +
                        "<td class='px-6 py-4'>" + anchor(userShowUrl, 'Detail') + "</td>" +
                        "<td class='px-6 py-4'>" + isValidated + "</td></tr>";
                }
                $('#table-data').html(html);
            },
            error: function(error) {
                console.log(error);
            }
        });
    </script>
</x-layout>
