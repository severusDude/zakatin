<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Person;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Distribution;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{
    public function index()
    {
        $statistic = $this->prepareReportData();

        return view('dashboard', $statistic);
    }

    public function download(Request $request)
    {
        if ($request->filled('format')) {
            if ($request->format == 'pdf') {
                return $this->zakatReport();
            } else {
                dd('word');
            }

            return redirect()->route('dashboard');
        }
    }

    protected function zakatReport()
    {
        $data = $this->prepareReportData();

        // Generate PDF
        $pdf = Pdf::loadView('reports.distribution', $data);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->download('laporan-zakat-fitrah-' . $data['tahun'] . '.pdf');
    }

    protected function prepareReportData()
    {
        $tahun = date('Y');
        $tanggal_cetak = Carbon::now()->isoFormat('dddd, D MMMM Y');

        $total_warga = Person::count();

        $categories = Category::recipient()->get();
        $muzakki = Payment::query()->get();
        $mustahiq = Distribution::query()->get();
        $total_muzakki = $muzakki->count();
        $total_mustahiq = $mustahiq->count();

        $muzakki_uang = $muzakki->where('type', 'uang')->count();
        $muzakki_beras = $muzakki->where('type', 'beras')->count();
        $total_jiwa = Person::payer()->count();

        $uang_terkumpul = Payment::where('type', 'uang')->sum('amount');
        $beras_terkumpul = Payment::where('type', 'beras')->sum('amount');

        $results = [];

        // Loop through each category
        foreach ($categories as $category) {
            // Find distributions related to this category through persons
            $distributions = Distribution::query()->whereHas('person', function ($query) use ($category) {
                $query->where('category_id', $category->id);
            });

            // Calculate totals for each type (uang and beras)
            $results[$category->label] = [
                'jumlah' => $distributions->count(),
                'uang' => $distributions->where('type', 'uang')->sum('amount'),
                'beras' => $distributions->where('type', 'beras')->sum('amount'),
            ];
        }

        $results['total'] = [
            'uang' => Distribution::where('type', 'uang')->sum('amount'),
            'beras' => Distribution::where('type', 'beras')->sum('amount'),
        ];

        return compact(
            'tahun',
            'tanggal_cetak',
            'total_warga',
            'categories',
            'total_muzakki',
            'total_mustahiq',
            'muzakki_uang',
            'muzakki_beras',
            'total_jiwa',
            'uang_terkumpul',
            'beras_terkumpul',
            'results'
        );
    }
}
