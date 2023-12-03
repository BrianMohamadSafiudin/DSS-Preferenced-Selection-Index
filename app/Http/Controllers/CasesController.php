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
        'alternative16' => 'required','alternative17' => 'required','alternative18' => 'required','alternative19' => 'required','alternative20' => 'required',
        'alternative21' => 'required','alternative22' => 'required','alternative23' => 'required','alternative24' => 'required','alternative25' => 'required',
        'alternative26' => 'required','alternative27' => 'required','alternative28' => 'required','alternative29' => 'required','alternative30' => 'required',
        'alternative31' => 'required','alternative32' => 'required','alternative33' => 'required','alternative34' => 'required','alternative35' => 'required',
        'alternative36' => 'required','alternative37' => 'required','alternative38' => 'required','alternative39' => 'required','alternative40' => 'required',
        'alternative41' => 'required','alternative42' => 'required','alternative43' => 'required','alternative44' => 'required','alternative45' => 'required',

        'a1c1' => 'required','a1c2' => 'required','a1c3' => 'required','a1c4' => 'required','a1c5' => 'required','a1c6' => 'required','a1c7' => 'required','a1c8' => 'required',
        'a2c1' => 'required','a2c2' => 'required','a2c3' => 'required','a2c4' => 'required','a2c5' => 'required','a2c6' => 'required','a2c7' => 'required','a2c8' => 'required',
        'a3c1' => 'required','a3c2' => 'required','a3c3' => 'required','a3c4' => 'required','a3c5' => 'required','a3c6' => 'required','a3c7' => 'required','a3c8' => 'required',
        'a4c1' => 'required','a4c2' => 'required','a4c3' => 'required','a4c4' => 'required','a4c5' => 'required','a4c6' => 'required','a4c7' => 'required','a4c8' => 'required',
        'a5c1' => 'required','a5c2' => 'required','a5c3' => 'required','a5c4' => 'required','a5c5' => 'required','a5c6' => 'required','a5c7' => 'required','a5c8' => 'required',
        'a6c1' => 'required','a6c2' => 'required','a6c3' => 'required','a6c4' => 'required','a6c5' => 'required','a6c6' => 'required','a6c7' => 'required','a6c8' => 'required',
        'a7c1' => 'required','a7c2' => 'required','a7c3' => 'required','a7c4' => 'required','a7c5' => 'required','a7c6' => 'required','a7c7' => 'required','a7c8' => 'required',
        'a8c1' => 'required','a8c2' => 'required','a8c3' => 'required','a8c4' => 'required','a8c5' => 'required','a8c6' => 'required','a8c7' => 'required','a8c8' => 'required',
        'a9c1' => 'required','a9c2' => 'required','a9c3' => 'required','a9c4' => 'required','a9c5' => 'required','a9c6' => 'required','a9c7' => 'required','a9c8' => 'required',
        'a10c1' => 'required','a10c2' => 'required','a10c3' => 'required','a10c4' => 'required','a10c5' => 'required','a10c6' => 'required','a10c7' => 'required','a10c8' => 'required',
        'a11c1' => 'required','a11c2' => 'required','a11c3' => 'required','a11c4' => 'required','a11c5' => 'required','a11c6' => 'required','a11c7' => 'required','a11c8' => 'required',
        'a12c1' => 'required','a12c2' => 'required','a12c3' => 'required','a12c4' => 'required','a12c5' => 'required','a12c6' => 'required','a12c7' => 'required','a12c8' => 'required',
        'a13c1' => 'required','a13c2' => 'required','a13c3' => 'required','a13c4' => 'required','a13c5' => 'required','a13c6' => 'required','a13c7' => 'required','a13c8' => 'required',
        'a14c1' => 'required','a14c2' => 'required','a14c3' => 'required','a14c4' => 'required','a14c5' => 'required','a14c6' => 'required','a14c7' => 'required','a14c8' => 'required',
        'a15c1' => 'required','a15c2' => 'required','a15c3' => 'required','a15c4' => 'required','a15c5' => 'required','a15c6' => 'required','a15c7' => 'required','a15c8' => 'required',
        'a16c1' => 'required','a16c2' => 'required','a16c3' => 'required','a16c4' => 'required','a16c5' => 'required','a16c6' => 'required','a16c7' => 'required','a16c8' => 'required',
        'a17c1' => 'required','a17c2' => 'required','a17c3' => 'required','a17c4' => 'required','a17c5' => 'required','a17c6' => 'required','a17c7' => 'required','a17c8' => 'required',
        'a18c1' => 'required','a18c2' => 'required','a18c3' => 'required','a18c4' => 'required','a18c5' => 'required','a18c6' => 'required','a18c7' => 'required','a18c8' => 'required',
        'a19c1' => 'required','a19c2' => 'required','a19c3' => 'required','a19c4' => 'required','a19c5' => 'required','a19c6' => 'required','a19c7' => 'required','a19c8' => 'required',
        'a20c1' => 'required','a20c2' => 'required','a20c3' => 'required','a20c4' => 'required','a20c5' => 'required','a20c6' => 'required','a20c7' => 'required','a20c8' => 'required',
        'a21c1' => 'required','a21c2' => 'required','a21c3' => 'required','a21c4' => 'required','a21c5' => 'required','a21c6' => 'required','a21c7' => 'required','a21c8' => 'required',
        'a22c1' => 'required','a22c2' => 'required','a22c3' => 'required','a22c4' => 'required','a22c5' => 'required','a22c6' => 'required','a22c7' => 'required','a22c8' => 'required',
        'a23c1' => 'required','a23c2' => 'required','a23c3' => 'required','a23c4' => 'required','a23c5' => 'required','a23c6' => 'required','a23c7' => 'required','a23c8' => 'required',
        'a24c1' => 'required','a24c2' => 'required','a24c3' => 'required','a24c4' => 'required','a24c5' => 'required','a24c6' => 'required','a24c7' => 'required','a24c8' => 'required',
        'a25c1' => 'required','a25c2' => 'required','a25c3' => 'required','a25c4' => 'required','a25c5' => 'required','a25c6' => 'required','a25c7' => 'required','a25c8' => 'required',
        'a26c1' => 'required','a26c2' => 'required','a26c3' => 'required','a26c4' => 'required','a26c5' => 'required','a26c6' => 'required','a26c7' => 'required','a26c8' => 'required',
        'a27c1' => 'required','a27c2' => 'required','a27c3' => 'required','a27c4' => 'required','a27c5' => 'required','a27c6' => 'required','a27c7' => 'required','a27c8' => 'required',
        'a28c1' => 'required','a28c2' => 'required','a28c3' => 'required','a28c4' => 'required','a28c5' => 'required','a28c6' => 'required','a28c7' => 'required','a28c8' => 'required',
        'a29c1' => 'required','a29c2' => 'required','a29c3' => 'required','a29c4' => 'required','a29c5' => 'required','a29c6' => 'required','a29c7' => 'required','a29c8' => 'required',
        'a30c1' => 'required','a30c2' => 'required','a30c3' => 'required','a30c4' => 'required','a30c5' => 'required','a30c6' => 'required','a30c7' => 'required','a30c8' => 'required',
        'a31c1' => 'required','a31c2' => 'required','a31c3' => 'required','a31c4' => 'required','a31c5' => 'required','a31c6' => 'required','a31c7' => 'required','a31c8' => 'required',
        'a32c1' => 'required','a32c2' => 'required','a32c3' => 'required','a32c4' => 'required','a32c5' => 'required','a32c6' => 'required','a32c7' => 'required','a32c8' => 'required',
        'a33c1' => 'required','a33c2' => 'required','a33c3' => 'required','a33c4' => 'required','a33c5' => 'required','a33c6' => 'required','a33c7' => 'required','a33c8' => 'required',
        'a34c1' => 'required','a34c2' => 'required','a34c3' => 'required','a34c4' => 'required','a34c5' => 'required','a34c6' => 'required','a34c7' => 'required','a34c8' => 'required',
        'a35c1' => 'required','a35c2' => 'required','a35c3' => 'required','a35c4' => 'required','a35c5' => 'required','a35c6' => 'required','a35c7' => 'required','a35c8' => 'required',
        'a36c1' => 'required','a36c2' => 'required','a36c3' => 'required','a36c4' => 'required','a36c5' => 'required','a36c6' => 'required','a36c7' => 'required','a36c8' => 'required',
        'a37c1' => 'required','a37c2' => 'required','a37c3' => 'required','a37c4' => 'required','a37c5' => 'required','a37c6' => 'required','a37c7' => 'required','a37c8' => 'required',
        'a38c1' => 'required','a38c2' => 'required','a38c3' => 'required','a38c4' => 'required','a38c5' => 'required','a38c6' => 'required','a38c7' => 'required','a38c8' => 'required',
        'a39c1' => 'required','a39c2' => 'required','a39c3' => 'required','a39c4' => 'required','a39c5' => 'required','a39c6' => 'required','a39c7' => 'required','a39c8' => 'required',
        'a40c1' => 'required','a40c2' => 'required','a40c3' => 'required','a40c4' => 'required','a40c5' => 'required','a40c6' => 'required','a40c7' => 'required','a40c8' => 'required',
        'a41c1' => 'required','a41c2' => 'required','a41c3' => 'required','a41c4' => 'required','a41c5' => 'required','a41c6' => 'required','a41c7' => 'required','a41c8' => 'required',
        'a42c1' => 'required','a42c2' => 'required','a42c3' => 'required','a42c4' => 'required','a42c5' => 'required','a42c6' => 'required','a42c7' => 'required','a42c8' => 'required',
        'a43c1' => 'required','a43c2' => 'required','a43c3' => 'required','a43c4' => 'required','a43c5' => 'required','a43c6' => 'required','a43c7' => 'required','a43c8' => 'required',
        'a44c1' => 'required','a44c2' => 'required','a44c3' => 'required','a44c4' => 'required','a44c5' => 'required','a44c6' => 'required','a44c7' => 'required','a44c8' => 'required',
        'a45c1' => 'required','a45c2' => 'required','a45c3' => 'required','a45c4' => 'required','a45c5' => 'required','a45c6' => 'required','a45c7' => 'required','a45c8' => 'required',
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
        for ($i = 1; $i <= 45; $i++) {
            for ($j = 1; $j <= 8; $j++) {
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
        for ($i = 1; $i <= 45; $i++) {
            for ($j = 1; $j <= 8; $j++) {
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
        for ($i = 1; $i <= 8; $i++) {
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
        $n8 = array();

        for ($i = 1; $i <= 45; $i++) {
            $columnName = 'a'.$i.'c1';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n1['na'.$i.'c1'] = $temp / $maxValues[1];
            $columnName = 'a'.$i.'c2';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n2['na'.$i.'c2'] = $temp / $maxValues[2];
            $columnName = 'a'.$i.'c3';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n3['na'.$i.'c3'] = $temp / $maxValues[3];
            $columnName = 'a'.$i.'c4';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n4['na'.$i.'c4'] = $temp / $maxValues[4];
            $columnName = 'a'.$i.'c5';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n5['na'.$i.'c5'] = $temp / $maxValues[5];
            $columnName = 'a'.$i.'c6';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n6['na'.$i.'c6'] = $temp / $maxValues[6];
            $columnName = 'a'.$i.'c7';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n7['na'.$i.'c7'] = $temp / $maxValues[7];
            $columnName = 'a'.$i.'c8';
            $temp = DB::table('cases')->where('cases_id', $primarykey)->value($columnName);
            $n8['na'.$i.'c8'] = $minValues[8] / $temp;
        }

        $n1['cases_id'] = $primarykey;
        $n2['cases_id'] = $primarykey;
        $n3['cases_id'] = $primarykey;
        $n4['cases_id'] = $primarykey;
        $n5['cases_id'] = $primarykey;
        $n6['cases_id'] = $primarykey;
        $n7['cases_id'] = $primarykey;
        $n8['cases_id'] = $primarykey;

        // menjumlahkan semua value pada array
        $total_n1 = array_sum(array_slice($n1, 0, 45));
        $total_n2 = array_sum(array_slice($n2, 0, 45));
        $total_n3 = array_sum(array_slice($n3, 0, 45));
        $total_n4 = array_sum(array_slice($n4, 0, 45));
        $total_n5 = array_sum(array_slice($n5, 0, 45));
        $total_n6 = array_sum(array_slice($n6, 0, 45));
        $total_n7 = array_sum(array_slice($n7, 0, 45));
        $total_n8 = array_sum(array_slice($n8, 0, 45));

        $data = array_merge($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8);
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
        'm8' => $total_n8,
        ]
        );

        // menghitung rata - rata
        $mean1 = $total_n1 / 45;
        $mean2 = $total_n2 / 45;
        $mean3 = $total_n3 / 45;
        $mean4 = $total_n4 / 45;
        $mean5 = $total_n5 / 45;
        $mean6 = $total_n6 / 45;
        $mean7 = $total_n7 / 45;
        $mean8 = $total_n8 / 45;

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
            'mean8' => $mean8,
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
            'mean8' => $mean8,
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
        $∅8 = array();

        for ($i = 1; $i <= 45; $i++) {
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
            $columnName = 'na'.$i.'c8';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $∅8['∅a'.$i.'c8'] = pow($temp - $mean8, 2);
        }

        $∅1['cases_id'] = $primarykey;
        $∅2['cases_id'] = $primarykey;
        $∅3['cases_id'] = $primarykey;
        $∅4['cases_id'] = $primarykey;
        $∅5['cases_id'] = $primarykey;
        $∅6['cases_id'] = $primarykey;
        $∅7['cases_id'] = $primarykey;
        $∅8['cases_id'] = $primarykey;

        $determining = array_merge($∅1,$∅2,$∅3,$∅4,$∅5,$∅6,$∅7,$∅8);
        DB::table('determining')->updateOrInsert(['cases_id' => $primarykey], $determining);

        // Specifying the value in preferences
        $total_∅1 = array_sum(array_slice($∅1, 0, 45));
        $total_∅2 = array_sum(array_slice($∅2, 0, 45));
        $total_∅3 = array_sum(array_slice($∅3, 0, 45));
        $total_∅4 = array_sum(array_slice($∅4, 0, 45));
        $total_∅5 = array_sum(array_slice($∅5, 0, 45));
        $total_∅6 = array_sum(array_slice($∅6, 0, 45));
        $total_∅7 = array_sum(array_slice($∅7, 0, 45));
        $total_∅8 = array_sum(array_slice($∅8, 0, 45));

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
            '∅8' => $total_∅8,
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
            '∅8' => $total_∅8,
            ]);
        }

        $𝛺1 = 1 - $total_∅1;
        $𝛺2 = 1 - $total_∅2;
        $𝛺3 = 1 - $total_∅3;
        $𝛺4 = 1 - $total_∅4;
        $𝛺5 = 1 - $total_∅5;
        $𝛺6 = 1 - $total_∅6;
        $𝛺7 = 1 - $total_∅7;
        $𝛺8 = 1 - $total_∅8;
        $𝛺total = $𝛺1 + $𝛺2 + $𝛺3 + $𝛺4 + $𝛺5 + $𝛺6 + $𝛺7 + $𝛺8;

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
            'spec8' => $𝛺8,
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
            'spec8' => $𝛺8,
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
        $w8 = $𝛺8 / $𝛺total;

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
        'weight8' => $w8,
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
        $psi8 = array();

        for ($i = 1; $i <= 45; $i++) {
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
            $columnName = 'na'.$i.'c8';
            $temp = DB::table('normalisasi')->where('cases_id', $primarykey)->value($columnName);
            $psi8['psia'.$i.'c8'] = $temp * $w8;
        }

        $psi1['cases_id'] = $primarykey;
        $psi2['cases_id'] = $primarykey;
        $psi3['cases_id'] = $primarykey;
        $psi4['cases_id'] = $primarykey;
        $psi5['cases_id'] = $primarykey;
        $psi6['cases_id'] = $primarykey;
        $psi7['cases_id'] = $primarykey;
        $psi8['cases_id'] = $primarykey;

        $psi = array_merge($psi1,$psi2,$psi3,$psi4,$psi5,$psi6,$psi7,$psi8);
        DB::table('psi')->updateOrInsert(['cases_id' => $primarykey], $psi);

        // total rangking akhir

        $totals = array();
        for ($i = 1; $i <= 45; $i++) {
            $sum = 0; // initialize total value for each alternative
            for ($j = 1; $j <= 8; $j++) {
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

        $data3 = array_slice($data2, 0, 45);

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
