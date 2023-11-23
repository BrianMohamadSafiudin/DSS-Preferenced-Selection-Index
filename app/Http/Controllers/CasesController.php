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
        'alternative1' => 'required',
        'alternative2' => 'required',
        'alternative3' => 'required',
        'alternative4' => 'required',
        'alternative5' => 'required',
        'alternative6' => 'required',
        'alternative7' => 'required',
        'alternative8' => 'required',
        'alternative9' => 'required',
        'alternative10' => 'required',
        'a1c1' => 'required',
        'a1c2' => 'required',
        'a1c3' => 'required',
        'a1c4' => 'required',
        'a1c5' => 'required',
        'a2c1' => 'required',
        'a2c2' => 'required',
        'a2c3' => 'required',
        'a2c4' => 'required',
        'a2c5' => 'required',
        'a3c1' => 'required',
        'a3c2' => 'required',
        'a3c3' => 'required',
        'a3c4' => 'required',
        'a3c5' => 'required',
        'a4c1' => 'required',
        'a4c2' => 'required',
        'a4c3' => 'required',
        'a4c4' => 'required',
        'a4c5' => 'required',
        'a5c1' => 'required',
        'a5c2' => 'required',
        'a5c3' => 'required',
        'a5c4' => 'required',
        'a5c5' => 'required',
        'a6c1' => 'required',
        'a6c2' => 'required',
        'a6c3' => 'required',
        'a6c4' => 'required',
        'a6c5' => 'required',
        'a7c1' => 'required',
        'a7c2' => 'required',
        'a7c3' => 'required',
        'a7c4' => 'required',
        'a7c5' => 'required',
        'a8c1' => 'required',
        'a8c2' => 'required',
        'a8c3' => 'required',
        'a8c4' => 'required',
        'a8c5' => 'required',
        'a9c1' => 'required',
        'a9c2' => 'required',
        'a9c3' => 'required',
        'a9c4' => 'required',
        'a9c5' => 'required',
        'a10c1' => 'required',
        'a10c2' => 'required',
        'a10c3' => 'required',
        'a10c4' => 'required',
        'a10c5' => 'required',
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
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
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
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 5; $j++) {
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
        for ($i = 1; $i <= 5; $i++) {
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

        for ($i = 1; $i <= 10; $i++) {
            $columnName = 'a'.$i.'c1';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n1['na'.$i.'c1'] = $temp / $maxValues[1];
            $columnName = 'a'.$i.'c2';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n2['na'.$i.'c2'] = $minValues[2] / $temp;
            $columnName = 'a'.$i.'c3';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n3['na'.$i.'c3'] = $temp / $maxValues[3];
            $columnName = 'a'.$i.'c4';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n4['na'.$i.'c4'] = $minValues[4] / $temp;
            $columnName = 'a'.$i.'c5';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n5['na'.$i.'c5'] = $temp / $maxValues[5];
        }

        $n1['cases_id'] = $primarykey;
        $n2['cases_id'] = $primarykey;
        $n3['cases_id'] = $primarykey;
        $n4['cases_id'] = $primarykey;
        $n5['cases_id'] = $primarykey;

        // menjumlahkan semua value pada array
        $total_n1 = array_sum(array_slice($n1, 0, 10));
        $total_n2 = array_sum(array_slice($n2, 0, 10));
        $total_n3 = array_sum(array_slice($n3, 0, 10));
        $total_n4 = array_sum(array_slice($n4, 0, 10));
        $total_n5 = array_sum(array_slice($n5, 0, 10));

        $data = array_merge($n1,$n2,$n3,$n4,$n5);
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
        ]
        );

        // menghitung rata - rata
        $mean1 = $total_n1 / 10;
        $mean2 = $total_n2 / 10;
        $mean3 = $total_n3 / 10;
        $mean4 = $total_n4 / 10;
        $mean5 = $total_n5 / 10;

        $mean = DB::table('mean')->where('cases_id', $primarykey)->first();

        if ($mean) {
            // data sudah ada, lakukan update
            DB::table('mean')->where('cases_id', $primarykey)->update([
            'mean1' => $mean1,
            'mean2' => $mean2,
            'mean3' => $mean3,
            'mean4' => $mean4,
            'mean5' => $mean5,
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
            ]);
        }

        // determining

        $∅1 = array();
        $∅2 = array();
        $∅3 = array();
        $∅4 = array();
        $∅5 = array();

        for ($i = 1; $i <= 10; $i++) {
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
        }

        $∅1['cases_id'] = $primarykey;
        $∅2['cases_id'] = $primarykey;
        $∅3['cases_id'] = $primarykey;
        $∅4['cases_id'] = $primarykey;
        $∅5['cases_id'] = $primarykey;

        $determining = array_merge($∅1,$∅2,$∅3,$∅4,$∅5);
        DB::table('determining')->updateOrInsert(['cases_id' => $primarykey], $determining);

        // Specifying the value in preferences
        $total_∅1 = array_sum(array_slice($∅1, 0, 10));
        $total_∅2 = array_sum(array_slice($∅2, 0, 10));
        $total_∅3 = array_sum(array_slice($∅3, 0, 10));
        $total_∅4 = array_sum(array_slice($∅4, 0, 10));
        $total_∅5 = array_sum(array_slice($∅5, 0, 10));

        $sum2 = DB::table('sum2')->where('cases_id', $primarykey)->first();

        if ($sum2) {
            // data sudah ada, lakukan update
            DB::table('sum2')->where('cases_id', $primarykey)->update([
            '∅1' => $total_∅1,
            '∅2' => $total_∅2,
            '∅3' => $total_∅3,
            '∅4' => $total_∅4,
            '∅5' => $total_∅5,
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
            ]);
        }

        $𝛺1 = 1 - $total_∅1;
        $𝛺2 = 1 - $total_∅2;
        $𝛺3 = 1 - $total_∅3;
        $𝛺4 = 1 - $total_∅4;
        $𝛺5 = 1 - $total_∅5;
        $𝛺total = $𝛺1 + $𝛺2 + $𝛺3 + $𝛺4 + $𝛺5;

        $spec = DB::table('spec')->where('cases_id', $primarykey)->first();

        if ($spec) {
            // data sudah ada, lakukan update
            DB::table('spec')->where('cases_id', $primarykey)->update([
            'spec1' => $𝛺1,
            'spec2' => $𝛺2,
            'spec3' => $𝛺3,
            'spec4' => $𝛺4,
            'spec5' => $𝛺5,
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
            'spectotal'=> $𝛺total,
            ]);
        }

        //weight

        $w1 = $𝛺1 / $𝛺total;
        $w2 = $𝛺2 / $𝛺total;
        $w3 = $𝛺3 / $𝛺total;
        $w4 = $𝛺4 / $𝛺total;
        $w5 = $𝛺5 / $𝛺total;

        DB::table('weight')->updateOrInsert(
        ['cases_id' => $primarykey],
        [
        'weight1' => $w1,
        'weight2' => $w2,
        'weight3' => $w3,
        'weight4' => $w4,
        'weight5' => $w5,
        ]
        );

        // count psi
        $psi1 = array();
        $psi2 = array();
        $psi3 = array();
        $psi4 = array();
        $psi5 = array();

        for ($i = 1; $i <= 10; $i++) {
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
        }

        $psi1['cases_id'] = $primarykey;
        $psi2['cases_id'] = $primarykey;
        $psi3['cases_id'] = $primarykey;
        $psi4['cases_id'] = $primarykey;
        $psi5['cases_id'] = $primarykey;

        $psi = array_merge($psi1,$psi2,$psi3,$psi4,$psi5);
        DB::table('psi')->updateOrInsert(['cases_id' => $primarykey], $psi);

        // total rangking akhir

        $totals = array();
        for ($i = 1; $i <= 10; $i++) {
            $sum = 0; // initialize total value for each alternative
            for ($j = 1; $j <= 5; $j++) {
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

        $data3 = array_slice($data2, 0, 10);

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
