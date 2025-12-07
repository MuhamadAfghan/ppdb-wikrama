<x-layout>
    @php
        $latestPaymentIsFailed = false;
    @endphp
    <x-slot name="header">Pembayaran</x-slot>

    <div>
        <div class="flex gap-5">
            <span class="w-10 h-3 bg-blue-900 rounded-3xl mt-2"></span>
            <div>
                <h1 class="text-xl mb-2 font-semibold text-gray-900">Pembayaran</h1>
                <p>Silahkan upload bukti pembayaran Anda di form berikut</p>
            </div>
        </div>
    </div>

    @if (auth()->user()->payments->count() > 0)
        @if (auth()->user()->payments->last()->status == 'pending')
            <x-alert type="warning">Pembayaran sedang diverifikasi, tunggu informasi selanjutnya.</x-alert>
        @endif

        @if (auth()->user()->payments->last()->status == 'accepted')
            <x-alert type="success">Pembayaran sedang diverifikasi, tunggu informasi selanjutnya.</x-alert>
        @endif

        @if (auth()->user()->payments->last()->status == 'rejected')
            <x-alert type="danger">Pembayaran gagal, silahkan coba kembali</x-alert>
            @php $latestPaymentIsFailed = true; @endphp
        @endif
    @endif

    @if (auth()->user()->payments->count() == 0 || $latestPaymentIsFailed)
        <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data"
            class="shadow  border-t-4 border-blue-900 rounded-lg p-5 bg-white">
            @csrf
            <h1 class="text-xl font-semibold text-blue-900">Form Pembayaran</h1>

            <div class="grid lg:grid-cols-3 gap-5 mt-5">
                <div>
                    <x-input-label for="nama_bank" :value="__('Nama Bank')" />
                    <x-selected-advance id="nama_bank" name="nama_bank" placeholder="Pilih Nama Bank" class="py-3"
                        required value="{{ old('nama_bank') }}">
                    </x-selected-advance>
                    <x-input-error :messages="$errors->get('nama_bank')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="nama_pemilik" :value="__('Nama Pemilik Rekening')" />
                    <x-text-input id="nama_pemilik" class="block w-full mt-1 py-3" type="text" name="nama_pemilik"
                        :value="old('nama_pemilik')" required autocomplete="nama_pemilik" placeholder="Masukkan Nama Lengkap" />
                    <x-input-error :messages="$errors->get('nama_pemilik')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="nominal" :value="__('Nominal')" />
                    <x-text-input id="nominal" class="block w-full mt-1 py-3" type="text" name="nominal"
                        :value="old('nominal')" required autocomplete="name" placeholder="Masukkan Nominal yang dibayarkan" />
                    <x-input-error :messages="$errors->get('nominal')" class="mt-2" />
                </div>
            </div>

            <div class="mt-5 hidden" id="nama_bank_lainnya">
                <x-input-label for="nama_bank_lainnya" :value="__('Nama Bank atau Dompet Digital')" />
                <x-text-input id="nama_bank_lainnya_input" class="block w-full mt-1 py-3" type="text"
                    name="nama_bank_lainnya" placeholder="Masukkan Nama Bank atau Dompet Digital" />
                <x-input-error :messages="$errors->get('nama_bank_lainnya')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="bukti" :value="__('Bukti Transfer')" />
                <x-text-input id="bukti" class="block w-full mt-1 " type="file" name="bukti_bayar" required
                    autocomplete="bukti" />
                <x-input-error :messages="$errors->get('bukti_bayar')" class="mt-2" />
            </div>

            <div class="mt-5 text-end">
                <x-btn-primary>Upload Bukti Pembayaran</x-btn-primary>
            </div>
        </form>

        @push('scripts')
            <script>
                $(document).ready(function() {
                    // Function to add "LAINNYA" option
                    function addOtherOption(data) {
                        data.push({
                            id: "OTHER",
                            text: "LAINNYA"
                        });
                    }

                    // Initialize Select2 after fetching data
                    function initializeSelect2(banks) {
                        $('#nama_bank').select2({
                            data: banks,
                            tags: true,
                            createTag: function(params) {
                                return {
                                    id: params.term,
                                    text: params.term,
                                    newOption: true
                                };
                            },
                            insertTag: function(data, tag) {
                                addOtherOption(data);
                            }
                        });
                    }

                    // Fetch banks data and initialize Select2
                    $.ajax({
                        url: "https://gist.githubusercontent.com/muhammadyana/6abf8480799637b4082359b509410018/raw/dc4aae6808285aea032a3971b3e78c497881aa23/indonesia-bank.json",
                        method: "GET",
                        success: function(response) {
                            let data = typeof response === 'string' ? JSON.parse(response) : response;

                            if (Array.isArray(data)) {
                                var banks = data.map(function(bank) {
                                    return {
                                        id: bank.name,
                                        text: bank.name
                                    };
                                });

                                addOtherOption(banks);
                                initializeSelect2(banks);
                            } else {
                                console.error("Unexpected data format", data);
                            }
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });

                    $('#nama_bank').on('change', function() {
                        if ($(this).val() === 'OTHER') {
                            $('#nama_bank_lainnya').removeClass('hidden');
                        } else {
                            $('#nama_bank_lainnya').addClass('hidden');
                        }
                    });

                    $('#nominal').on('input', function() {
                        let value = $(this).val().replace(/[^0-9]/g, '');
                        if (value) {
                            $(this).val(formatRupiah(value));
                        } else {
                            $(this).val('');
                        }
                    });

                    function formatRupiah(angka, prefix = 'Rp. ') {
                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                        if (ribuan) {
                            let separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }

                        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
                        // return prefix === undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                        return 'Rp. ' + rupiah;
                    }
                });
            </script>
        @endpush
    @endif
</x-layout>
