<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\Cases;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\console;

class CasesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
        'alternative1' => 'required','alternative2' => 'required','alternative3' => 'required','alternative4' => 'required','alternative5' => 'required',
        'alternative6' => 'required','alternative7' => 'required','alternative8' => 'required','alternative9' => 'required','alternative10' => 'required',
        'alternative11' => 'required','alternative12' => 'required','alternative13' => 'required','alternative14' => 'required','alternative15' => 'required',

        'a1c1' => 'required','a1c2' => 'required','a1c3' => 'required','a1c4' => 'required','a1c5' => 'required','a1c6' => 'required','a1c7' => 'required',
        'a2c1' => 'required','a2c2' => 'required','a2c3' => 'required','a2c4' => 'required','a2c5' => 'required','a2c6' => 'required','a2c7' => 'required',
        'a3c1' => 'required','a3c2' => 'required','a3c3' => 'required','a3c4' => 'required','a3c5' => 'required','a3c6' => 'required','a3c7' => 'required',
        'a4c1' => 'required','a4c2' => 'required','a4c3' => 'required','a4c4' => 'required','a4c5' => 'required','a4c6' => 'required','a4c7' => 'required',
        'a5c1' => 'required','a5c2' => 'required','a5c3' => 'required','a5c4' => 'required','a5c5' => 'required','a5c6' => 'required','a5c7' => 'required',
        'a6c1' => 'required','a6c2' => 'required','a6c3' => 'required','a6c4' => 'required','a6c5' => 'required','a6c6' => 'required','a6c7' => 'required',
        'a7c1' => 'required','a7c2' => 'required','a7c3' => 'required','a7c4' => 'required','a7c5' => 'required','a7c6' => 'required','a7c7' => 'required',
        'a8c1' => 'required','a8c2' => 'required','a8c3' => 'required','a8c4' => 'required','a8c5' => 'required','a8c6' => 'required','a8c7' => 'required',
        'a9c1' => 'required','a9c2' => 'required','a9c3' => 'required','a9c4' => 'required','a9c5' => 'required','a9c6' => 'required','a9c7' => 'required',
        'a10c1' => 'required','a10c2' => 'required','a10c3' => 'required','a10c4' => 'required','a10c5' => 'required','a10c6' => 'required','a10c7' => 'required',
        'a11c1' => 'required','a11c2' => 'required','a11c3' => 'required','a11c4' => 'required','a11c5' => 'required','a11c6' => 'required','a11c7' => 'required',
        'a12c1' => 'required','a12c2' => 'required','a12c3' => 'required','a12c4' => 'required','a12c5' => 'required','a12c6' => 'required','a12c7' => 'required',
        'a13c1' => 'required','a13c2' => 'required','a13c3' => 'required','a13c4' => 'required','a13c5' => 'required','a13c6' => 'required','a13c7' => 'required',
        'a14c1' => 'required','a14c2' => 'required','a14c3' => 'required','a14c4' => 'required','a14c5' => 'required','a14c6' => 'required','a14c7' => 'required',
        'a15c1' => 'required','a15c2' => 'required','a15c3' => 'required','a15c4' => 'required','a15c5' => 'required','a15c6' => 'required','a15c7' => 'required',
        ]);

        // ambil primary key dari data yang baru di-inputkan
        $primarykey = Cases::create($request->all())->getKey();

        // simpan nilai primary key di Session
        Session::put('primarykey', $primarykey);
        $maxValues = array();

        return redirect()->action('App\Http\Controllers\CasesController@normalizing', ['primarykey' => $primarykey]);
    }

    public function normalizing(){
        $primarykey = Session::get('primarykey');
        $cases = DB::table('cases')->where('cases_id', $primarykey)->get();

        // mencari nilai maximum pada setiap kriteria
        $maxValues = array();
        for ($i = 1; $i <= 15; $i++) {
            for ($j = 1; $j <= 7; $j++) {
                $columnName = 'a'.$i.'c'.$j;
                $tempMax = DB::table('cases')
                ->where('cases_id', $primarykey)
                ->max($columnName);
                if (!isset($maxValues[$j])) {
                    $maxValues[$j] = null;
                }
                if ($tempMax > $maxValues[$j] || $maxValues[$j] === null) {
                    $maxValues[$j] = $tempMax;
                }
            }
        }

        // mencari nilai minimum pada setiap kriteria
        $minValues = array();
        for ($i = 1; $i <= 15; $i++) {
            for ($j = 1; $j <= 7; $j++) {
                $columnName = 'a'.$i.'c'.$j;
                $tempMin = DB::table('cases')
                ->where('cases_id', $primarykey)
                ->min($columnName);
                if (!isset($minValues[$j])) {
                    $minValues[$j] = null;
                }
                if ($tempMin < $minValues[$j] || $minValues[$j] === null) {
                    $minValues[$j] = $tempMin;
                }
            }
        }

        // membuat array data untuk di-insert atau di-update
        $data = array(
        'cases_id' => $primarykey
        );
        for ($i = 1; $i <= 7; $i++) {
            $data['max'.$i] = $maxValues[$i];
            $data['min'.$i] = $minValues[$i];
        }

        // melakukan update atau insert pada tabel maxmin
        $key = DB::table('maxmin')->updateOrInsert(
        array('cases_id' => $primarykey),
        $data
        );

        // mendapatkan nilai primary key
        if ($key === false) {
            $key = DB::table('maxmin')->where('cases_id', $primarykey);
        }
        $maxmin = DB::table('maxmin')->where('cases_id', $primarykey)->get();

        // Normalisasi , max min , rata - rata

        $n1 = array();
        $n2 = array();
        $n3 = array();
        $n4 = array();
        $n5 = array();
        $n6 = array();
        $n7 = array();

        for ($i = 1; $i <= 15; $i++) {
            $columnName = 'a'.$i.'c1';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n1['na'.$i.'c1'] = $temp / $maxValues[1];
            $columnName = 'a'.$i.'c2';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n2['na'.$i.'c2'] = $minValues[2] / $temp;
            $columnName = 'a'.$i.'c3';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n3['na'.$i.'c3'] = $minValues[3] / $temp;
            $columnName = 'a'.$i.'c4';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n4['na'.$i.'c4'] = $temp / $maxValues[4];
            $columnName = 'a'.$i.'c5';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n5['na'.$i.'c5'] = $minValues[5] / $temp;
            $columnName = 'a'.$i.'c6';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n6['na'.$i.'c6'] = $minValues[6] / $temp;
            $columnName = 'a'.$i.'c7';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n7['na'.$i.'c7'] = $minValues[7] / $temp;
        }

        $n1['cases_id'] = $primarykey;
        $n2['cases_id'] = $primarykey;
        $n3['cases_id'] = $primarykey;
        $n4['cases_id'] = $primarykey;
        $n5['cases_id'] = $primarykey;
        $n6['cases_id'] = $primarykey;
        $n7['cases_id'] = $primarykey;

        // menjumlahkan semua value pada array
        $total_n1 = array_sum(array_slice($n1, 0, 15));
        $total_n2 = array_sum(array_slice($n2, 0, 15));
        $total_n3 = array_sum(array_slice($n3, 0, 15));
        $total_n4 = array_sum(array_slice($n4, 0, 15));
        $total_n5 = array_sum(array_slice($n5, 0, 15));
        $total_n6 = array_sum(array_slice($n6, 0, 15));
        $total_n7 = array_sum(array_slice($n7, 0, 15));

        $data = array_merge($n1,$n2,$n3,$n4,$n5,$n6,$n7);
        DB::table('normalisasi')->updateOrInsert(['cases_id' => $primarykey], $data);

        // menyimpan hasil penjumlahan ke dalam database
        DB::table('sum1')->updateOrInsert(
        ['cases_id' => $primarykey],
        [
        'm1' => $total_n1,
        'm2' => $total_n2,
        'm3' => $total_n3,
        'm4' => $total_n4,
        'm5' => $total_n5,
        'm6' => $total_n6,
        'm7' => $total_n7,
        ]
        );

        // menghitung rata - rata
        $mean1 = $total_n1 / 15;
        $mean2 = $total_n2 / 15;
        $mean3 = $total_n3 / 15;
        $mean4 = $total_n4 / 15;
        $mean5 = $total_n5 / 15;
        $mean6 = $total_n6 / 15;
        $mean7 = $total_n7 / 15;

        $mean = DB::table('mean')->where('cases_id', $primarykey)->first();

        if ($mean) {
            // data sudah ada, lakukan update
            DB::table('mean')->where('cases_id', $primarykey)->update([
            'mean1' => $mean1,
            'mean2' => $mean2,
            'mean3' => $mean3,
            'mean4' => $mean4,
            'mean5' => $mean5,
            'mean6' => $mean6,
            'mean7' => $mean7,
            ]);
        } else {
            // data belum ada, lakukan insert
            DB::table('mean')->insert([
            'cases_id' => $primarykey,
            'mean1' => $mean1,
            'mean2' => $mean2,
            'mean3' => $mean3,
            'mean4' => $mean4,
            'mean5' => $mean5,
            'mean6' => $mean6,
            'mean7' => $mean7,
            ]);
        }

        // determining

        $∅1 = array();
        $∅2 = array();
        $∅3 = array();
        $∅4 = array();
        $∅5 = array();
        $∅6 = array();
        $∅7 = array();

        for ($i = 1; $i <= 15; $i++) {
            $columnName = 'na'.$i.'c1';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅1['∅a'.$i.'c1'] = pow($temp - $mean1, 2);
            $columnName = 'na'.$i.'c2';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅2['∅a'.$i.'c2'] = pow($temp - $mean2, 2);
            $columnName = 'na'.$i.'c3';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅3['∅a'.$i.'c3'] = pow($temp - $mean3, 2);
            $columnName = 'na'.$i.'c4';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅4['∅a'.$i.'c4'] = pow($temp - $mean4, 2);
            $columnName = 'na'.$i.'c5';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅5['∅a'.$i.'c5'] = pow($temp - $mean5, 2);
            $columnName = 'na'.$i.'c6';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅6['∅a'.$i.'c6'] = pow($temp - $mean6, 2);
            $columnName = 'na'.$i.'c7';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅7['∅a'.$i.'c7'] = pow($temp - $mean7, 2);
        }

        $∅1['cases_id'] = $primarykey;
        $∅2['cases_id'] = $primarykey;
        $∅3['cases_id'] = $primarykey;
        $∅4['cases_id'] = $primarykey;
        $∅5['cases_id'] = $primarykey;
        $∅6['cases_id'] = $primarykey;
        $∅7['cases_id'] = $primarykey;

        $determining = array_merge($∅1,$∅2,$∅3,$∅4,$∅5,$∅6,$∅7);
        DB::table('determining')->updateOrInsert(['cases_id' => $primarykey], $determining);

        // Specifying the value in preferences
        $total_∅1 = array_sum(array_slice($∅1, 0, 15));
        $total_∅2 = array_sum(array_slice($∅2, 0, 15));
        $total_∅3 = array_sum(array_slice($∅3, 0, 15));
        $total_∅4 = array_sum(array_slice($∅4, 0, 15));
        $total_∅5 = array_sum(array_slice($∅5, 0, 15));
        $total_∅6 = array_sum(array_slice($∅6, 0, 15));
        $total_∅7 = array_sum(array_slice($∅7, 0, 15));

        $sum2 = DB::table('sum2')->where('cases_id', $primarykey)->first();

        if ($sum2) {
            // data sudah ada, lakukan update
            DB::table('sum2')->where('cases_id', $primarykey)->update([
            '∅1' => $total_∅1,
            '∅2' => $total_∅2,
            '∅3' => $total_∅3,
            '∅4' => $total_∅4,
            '∅5' => $total_∅5,
            '∅6' => $total_∅6,
            '∅7' => $total_∅7,
            ]);
        } else {
            // data belum ada, lakukan insert
            DB::table('sum2')->insert([
            'cases_id' => $primarykey,
            '∅1' => $total_∅1,
            '∅2' => $total_∅2,
            '∅3' => $total_∅3,
            '∅4' => $total_∅4,
            '∅5' => $total_∅5,
            '∅6' => $total_∅6,
            '∅7' => $total_∅7,
            ]);
        }

        $𝛺1 = 1 - $total_∅1;
        $𝛺2 = 1 - $total_∅2;
        $𝛺3 = 1 - $total_∅3;
        $𝛺4 = 1 - $total_∅4;
        $𝛺5 = 1 - $total_∅5;
        $𝛺6 = 1 - $total_∅6;
        $𝛺7 = 1 - $total_∅7;
        $𝛺total = $𝛺1 + $𝛺2 + $𝛺3 + $𝛺4 + $𝛺5 + $𝛺6 + $𝛺7;

        $spec = DB::table('spec')->where('cases_id', $primarykey)->first();

        if ($spec) {
            // data sudah ada, lakukan update
            DB::table('spec')->where('cases_id', $primarykey)->update([
            'spec1' => $𝛺1,
            'spec2' => $𝛺2,
            'spec3' => $𝛺3,
            'spec4' => $𝛺4,
            'spec5' => $𝛺5,
            'spec6' => $𝛺6,
            'spec7' => $𝛺7,
            'spectotal'=> $𝛺total,
            ]);
        } else {
            // data belum ada, lakukan insert
            DB::table('spec')->insert([
            'cases_id' => $primarykey,
            'spec1' => $𝛺1,
            'spec2' => $𝛺2,
            'spec3' => $𝛺3,
            'spec4' => $𝛺4,
            'spec5' => $𝛺5,
            'spec6' => $𝛺6,
            'spec7' => $𝛺7,
            'spectotal'=> $𝛺total,
            ]);
        }

        //weight

        $w1 = $𝛺1 / $𝛺total;
        $w2 = $𝛺2 / $𝛺total;
        $w3 = $𝛺3 / $𝛺total;
        $w4 = $𝛺4 / $𝛺total;
        $w5 = $𝛺5 / $𝛺total;
        $w6 = $𝛺6 / $𝛺total;
        $w7 = $𝛺7 / $𝛺total;

        DB::table('weight')->updateOrInsert(
        ['cases_id' => $primarykey],
        [
        'weight1' => $w1,
        'weight2' => $w2,
        'weight3' => $w3,
        'weight4' => $w4,
        'weight5' => $w5,
        'weight6' => $w6,
        'weight7' => $w7,
        ]
        );

        // count psi
        $psi1 = array();
        $psi2 = array();
        $psi3 = array();
        $psi4 = array();
        $psi5 = array();
        $psi6 = array();
        $psi7 = array();

        for ($i = 1; $i <= 15; $i++) {
            $columnName = 'na'.$i.'c1';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi1['psia'.$i.'c1'] = $temp * $w1;
            $columnName = 'na'.$i.'c2';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi2['psia'.$i.'c2'] = $temp * $w2;
            $columnName = 'na'.$i.'c3';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi3['psia'.$i.'c3'] = $temp * $w3;
            $columnName = 'na'.$i.'c4';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi4['psia'.$i.'c4'] = $temp * $w4;
            $columnName = 'na'.$i.'c5';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi5['psia'.$i.'c5'] = $temp * $w5;
            $columnName = 'na'.$i.'c6';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi6['psia'.$i.'c6'] = $temp * $w6;
            $columnName = 'na'.$i.'c7';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi7['psia'.$i.'c7'] = $temp * $w7;
        }

        $psi1['cases_id'] = $primarykey;
        $psi2['cases_id'] = $primarykey;
        $psi3['cases_id'] = $primarykey;
        $psi4['cases_id'] = $primarykey;
        $psi5['cases_id'] = $primarykey;
        $psi6['cases_id'] = $primarykey;
        $psi7['cases_id'] = $primarykey;

        $psi = array_merge($psi1,$psi2,$psi3,$psi4,$psi5,$psi6,$psi7);
        DB::table('psi')->updateOrInsert(['cases_id' => $primarykey], $psi);

        // total rangking akhir

        $totals = array();
        for ($i = 1; $i <= 15; $i++) {
            $sum = 0; // initialize total value for each alternative
            for ($j = 1; $j <= 7; $j++) {
                $columnName = 'psia'.$i.'c'.$j;
                $temp = DB::table('psi')->where('cases_id', $primarykey)->value($columnName);
                $sum += $temp; // add up psi values for each criterion
            }
            $totals['A'.$i] = $sum;
        }
        $data2 = [];
        foreach ($totals as $key => $value) {
            $data2[$key] = $value;
        }
        $data2['cases_id'] = $primarykey;

        DB::table('sum3')->updateOrInsert($data2);

        $data3 = array_slice($data2, 0, 15);

        foreach($data3 as $key => $value) {
            DB::table('ranking')->updateOrInsert([
            'cases_id' => $primarykey,
            'tabel' => $key,
            'rank' => $value,
            ]);
        }

        $normalisasi = DB::table('normalisasi')->where('cases_id', $primarykey)->get();

        $join = DB::table('cases')
        ->join('normalisasi', 'normalisasi.cases_id', '=', 'cases.cases_id')
        ->join('maxmin', 'maxmin.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $sum1 = DB::table('sum1')->where('cases_id', $primarykey)->get();
        $sum2 = DB::table('sum2')->where('cases_id', $primarykey)->get();

        $mean = DB::table('cases')
        ->join('mean', 'mean.cases_id', '=', 'cases.cases_id')
        ->join('sum1', 'sum1.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $determine = DB::table('determining')->where('cases_id', $primarykey)->get();

        $determinejoin = DB::table('cases')
        ->join('mean', 'mean.cases_id', '=', 'cases.cases_id')
        ->join('normalisasi', 'normalisasi.cases_id', '=', 'cases.cases_id')
        ->join('determining', 'determining.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $spec = DB::table('cases')
        ->join('spec', 'spec.cases_id', '=', 'cases.cases_id')
        ->join('sum2', 'sum2.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $weight = DB::table('cases')
        ->join('spec', 'spec.cases_id', '=', 'cases.cases_id')
        ->join('weight', 'weight.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $psi = DB::table('psi')->where('cases_id', $primarykey)->get();

        $psijoin = DB::table('cases')
        ->join('weight', 'weight.cases_id', '=', 'cases.cases_id')
        ->join('normalisasi', 'normalisasi.cases_id', '=', 'cases.cases_id')
        ->join('psi', 'psi.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $sum3 = DB::table('cases')
        ->join('sum3', 'sum3.cases_id', '=', 'cases.cases_id')
        ->select('*')->where('cases.cases_id', '=', $primarykey)->get();

        $highestRanking = DB::table('ranking')
        ->where('cases_id', $primarykey)
        ->orderByDesc('rank')
        ->first();

        return view('landing.result', ['cases' => $cases,
        'maxmin' => $maxmin,
        'normalisasi' => $normalisasi,
        'highestRanking' => $highestRanking,
        'join' => $join,
        'sum1' => $sum1,
        'sum2' => $sum2,
        'sum3' => $sum3,
        'mean' => $mean,
        'spec' => $spec,
        'weight' => $weight,
        'psi' => $psi,
        'psijoin' => $psijoin,
        'determinejoin' => $determinejoin,
        'determine' => $determine]);
    }
    public function csvStore(Request $request)
    {
        // Validate the form
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');

            // Move the uploaded file to the public/csv directory with a custom name
            $filePath = $file->storeAs('csv', 'file.csv', 'public');

            // Get the absolute path to the uploaded CSV file
            $absolutePath = Storage::disk('public')->path('csv/file.csv');

            // Read the CSV file
            $csvData = $this->readCSV($absolutePath);

            // Example: Pass CSV data to the form view
            return view('landing.psicsv', compact('csvData'))->with('success', 'CSV file uploaded successfully.');
        }

        return back()->with('error', 'No CSV file found.');
    }

    private function readCSV($filePath)
    {
        $csvData = [];

        // Open the CSV file
        $file = fopen($filePath, 'r');

        if ($file) {
            // Read each line from the CSV file
            while (($rowData = fgetcsv($file)) !== false) {
                $csvData[] = $rowData;
            }

            // Close the CSV file
            fclose($file);
        }

        return $csvData;
    }
}
