<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laporan Pengumpulan Zakat Fitrah</title>
    <style type="text/css">
        /* Styles for A4 PDF */
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .title {
            font-size: 18pt;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 12pt;
            margin-bottom: 20px;
        }

        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        .summary-table th,
        .summary-table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .summary-table th {
            background-color: #f2f2f2;
        }

        .signature {
            margin-top: 60px;
            text-align: right;
            padding-right: 50px;
        }

        .signature-line {
            margin-top: 50px;
            border-bottom: 1px solid #000;
            width: 200px;
            display: inline-block;
        }

        .signature-title {
            margin-top: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="title">LAPORAN PENGUMPULAN ZAKAT FITRAH {{ $tahun }}</div>
        <div class="subtitle">{{ $tanggal_cetak }}</div>
    </div>

    <table class="summary-table">
        <thead>
            <tr>
                <th>Total Muzakki</th>
                <th>Total Jiwa</th>
                <th>Total Uang</th>
                <th>Total Beras</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ number_format($total_muzakki) }} orang</td>
                <td>{{ number_format($total_jiwa) }} jiwa</td>
                <td>Rp {{ number_format($total_uang, 0, ',', '.') }}</td>
                <td>{{ number_format($total_beras, 2, ',', '.') }} kg</td>
            </tr>
        </tbody>
    </table>

    <div class="signature">
        <div class="signature-line"></div>
        <div class="signature-title">Petugas Zakat Fitrah</div>
    </div>
</body>

</html>