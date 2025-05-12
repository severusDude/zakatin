<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Zakat Fitrah 1442 H</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 16px;
            margin-bottom: 5px;
            text-decoration: underline;
        }

        .header p {
            margin: 0;
            font-size: 12px;
        }

        .separator {
            background-color: #f2f2f2;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .total-row {
            font-weight: bold;
        }

        .note {
            margin-top: 10px;
            font-style: italic;
        }

        .signature {
            margin-top: 50px;
            width: 100%;
        }

        .signature-table {
            width: 100%;
            border: none;
        }

        .signature-table td {
            border: none;
            text-align: center;
            padding: 20px 0;
            width: 33%;
        }

        .signature-line {
            margin-top: 60px;
            border-bottom: 1px solid black;
            width: 60%;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>LAPORAN KEGIATAN PENGUMPULAN DAN PENDISTRIBUSIAN ZAKAT FITRAH {{ $tahun }}</h1>
        {{-- <p>DI MASJID NURUL ISLAM JALAN 26 DESA PERINTIS KECAMATAN RIMBO BUJANG KABUPATEN TEBO</p> --}}
        <p>{{ $tanggal_cetak }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <td colspan="8" class="separator"><strong>A. Pengumpulan Zakat</strong></td>
            </tr>
            <tr>
                <th>No.</th>
                <th>Uraian</th>
                <th>Muzaki</th>
                <th>Satuan (Rp/Kg)</th>
                <th>Uang (Rp)</th>
                <th>Beras (Kg)</th>
                <th>Keterangan</th>
                <th>Konversi Dalam Rupiah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pengumpulan Zakat Uang</td>
                <td>{{ number_format($muzakki_uang) }} orang</td>
                <td>Rp. 30.000,00 / Orang</td>
                <td>Rp {{ number_format($uang_terkumpul, 0, ',', '.') }}</td>
                <td>-</td>
                <td>-</td>
                <td>Rp {{ number_format($uang_terkumpul, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pengumpulan Zakat Beras</td>
                <td>{{ number_format($muzakki_beras) }} orang</td>
                <td>Minimal 2,5 Kg</td>
                <td>-</td>
                <td>{{ number_format($beras_terkumpul, 2, ',', '.') }} kg</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr class="total-row">
                <td colspan="2">Total Pengumpulan</td>
                <td>{{ $total_muzakki }}</td>
                <td>-</td>
                <td>Rp {{ number_format($uang_terkumpul, 0, ',', '.') }}</td>
                <td>{{ number_format($beras_terkumpul, 2, ',', '.') }} kg</td>
                <td>-</td>
                <td>Rp {{ number_format($uang_terkumpul + $beras_terkumpul, 0, ',', '.') }}</td>
            </tr>
        </tbody>
        <tr>
            <td colspan="8" class="separator"><strong>B. Distribusi Zakat</strong></td>
        </tr>
        <thead>
            <tr>
                <th>No.</th>
                <th>Uraian</th>
                <th>Mustahiq</th>
                <th>Satuan (Kg)</th>
                <th>Jumlah (Kg)</th>
                <th>Jumlah (Rp)</th>
                <th>Keterangan</th>
                <th>Konversi Dalam Rupiah</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>1</td>
                <td>{{ $category->label }}</td>
                <td>{{ $results[$category->label]['jumlah'] }} orang</td>
                <td>-</td>
                <td>{{ number_format($results[$category->label]['beras'], 2, ',', '.') }} kg</td>
                <td>{{ number_format($results[$category->label]['uang'], 0, ',', '.') }}</td>
                <td>-</td>
                <td>{{ number_format($results[$category->label]['uang'] + $results[$category->label]['beras'], 0, ',',
                    '.') }}</td>
            </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="2">Total Distribusi</td>
                <td>{{ $total_mustahiq }}</td>
                <td>-</td>
                <td>{{ number_format($results['total']['beras'], 2, ',', '.') }} kg</td>
                <td>{{ number_format($results['total']['uang'], 0, ',', '.') }}</td>
                <td>-</td>
                <td>{{ number_format($results['total']['uang'] + $results['total']['beras'], 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    {{-- <div class="note">
        *Catatan : Perhitungan jumlah beras yang dikeluarkan sejumlah 600 Kg dari 517 Kg penerimaan dan sejumlah 83 Kg
        diberikan dalam bentuk uang senilai Rp. 12.000/kg.*
    </div> --}}

    <div class="signature">
        <table class="signature-table">
            <tr>
                <td>
                    <div>Ketua RT,</div>
                    <div class="signature-line"></div>
                </td>
                <td>
                    <div>Ketua Amilin Zakat</div>
                    <div class="signature-line"></div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>