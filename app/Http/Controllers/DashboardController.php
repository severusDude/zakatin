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
        $persons = Person::count();
        $muzakki = Payment::query()->whereHas('person', function ($q) {
            $q->where('family_id', null);
        })->count();
        $mustahiq = Person::recipient()->count();
        $payments = Payment::where('status', true)->count();
        $distributions = Payment::where('status', true)->count();
        $collectedMoney = Payment::where('type', 'uang')->sum('amount');
        $collectedRice = Payment::where('type', 'beras')->sum('amount');
        $distributed = [
            'uang' => Distribution::where('type', 'uang')->sum('amount'),
            'beras' => Distribution::where('type', 'beras')->sum('amount'),
        ];

        $statistic = compact(
            'persons',
            'muzakki',
            'mustahiq',
            'payments',
            'distributions',
            'collectedMoney',
            'collectedRice',
            'distributed'
        );

        // dd($statistic);

        return view('dashboard', [
            'statistic' => $statistic
        ]);
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
        $tahun = date('Y');
        $tanggal_cetak = Carbon::now()->isoFormat('dddd, D MMMM Y');

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

        // dd($results);

        $data = compact(
            'tahun',
            'tanggal_cetak',
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

        // dd($data);

        // Generate PDF
        $pdf = Pdf::loadView('reports.distribution', $data);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->download('laporan-zakat-fitrah-' . $data['tahun'] . '.pdf');
    }
}
