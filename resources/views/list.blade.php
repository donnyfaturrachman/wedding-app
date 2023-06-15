<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Daftar Kehadiran</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="icon" href="favicon.png">
</head>

<body>
    <h1>Daftar Kehadiran</h1>
    @if (isset($dataRsvp) && count($dataRsvp) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Kehadiran</th>
                    <th scope="col">Jumlah Kehadiran</th>
                    <th scope="col">Hubungan</th>
                    <th scope="col">Ucapan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataRsvp as $data)
                    <tr>
                        <th scope="row">{{ $data->nama }}</th>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->nomor_handphone }}</td>
                        <td>{{ $data->kehadiran == 1 ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $data->kehadiran == 0 ? '-': $data->jumlah_kehadiran }}</td>
                        <td>{{ $data->hubungan }}</td>
                        <td>{{ $data->ucapan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <span>Data Kosong.</span>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
