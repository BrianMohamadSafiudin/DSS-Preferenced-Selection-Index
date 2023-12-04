<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model {
    use HasFactory;

    protected $table = 'cases';
    protected $primaryKey = 'cases_id';
    protected $fillable = [
        'alternative1','alternative2','alternative3','alternative4','alternative5',
        'alternative6','alternative7','alternative8','alternative9','alternative10',
        'alternative11','alternative12','alternative13','alternative14','alternative15',
        'alternative16','alternative17','alternative18','alternative19','alternative20',
        'alternative21','alternative22','alternative23','alternative24','alternative25',
        'alternative26','alternative27','alternative28','alternative29','alternative30',
        'alternative31','alternative32','alternative33','alternative34','alternative35',
        'alternative36','alternative37','alternative38','alternative39','alternative40',
        'alternative41','alternative42','alternative43','alternative44','alternative45',
        'a1c1',
        'a1c2',
        'a1c3',
        'a1c4',
        'a1c5',
        'a1c6',
        'a1c7',
        'a1c8',
        'a2c1',
        'a2c2',
        'a2c3',
        'a2c4',
        'a2c5',
        'a2c6',
        'a2c7',
        'a2c8',
        'a3c1',
        'a3c2',
        'a3c3',
        'a3c4',
        'a3c5',
        'a3c6',
        'a3c7',
        'a3c8',
        'a4c1',
        'a4c2',
        'a4c3',
        'a4c4',
        'a4c5',
        'a4c6',
        'a4c7',
        'a4c8',
        'a5c1',
        'a5c2',
        'a5c3',
        'a5c4',
        'a5c5',
        'a5c6',
        'a5c7',
        'a5c8',
        'a6c1',
        'a6c2',
        'a6c3',
        'a6c4',
        'a6c5',
        'a6c6',
        'a6c7',
        'a6c8',
        'a7c1',
        'a7c2',
        'a7c3',
        'a7c4',
        'a7c5',
        'a7c6',
        'a7c7',
        'a7c8',
        'a8c1',
        'a8c2',
        'a8c3',
        'a8c4',
        'a8c5',
        'a8c6',
        'a8c7',
        'a8c8',
        'a9c1',
        'a9c2',
        'a9c3',
        'a9c4',
        'a9c5',
        'a9c6',
        'a9c7',
        'a9c8',
        'a10c1',
        'a10c2',
        'a10c3',
        'a10c4',
        'a10c5',
        'a10c6',
        'a10c7',
        'a10c8',
        'a11c1',
        'a11c2',
        'a11c3',
        'a11c4',
        'a11c5',
        'a11c6',
        'a11c7',
        'a11c8',
        'a12c1',
        'a12c2',
        'a12c3',
        'a12c4',
        'a12c5',
        'a12c6',
        'a12c7',
        'a12c8',
        'a13c1',
        'a13c2',
        'a13c3',
        'a13c4',
        'a13c5',
        'a13c6',
        'a13c7',
        'a13c8',
        'a14c1',
        'a14c2',
        'a14c3',
        'a14c4',
        'a14c5',
        'a14c6',
        'a14c7',
        'a14c8',
        'a15c1',
        'a15c2',
        'a15c3',
        'a15c4',
        'a15c5',
        'a15c6',
        'a15c7',
        'a15c8',
        'a16c1',
        'a16c2',
        'a16c3',
        'a16c4',
        'a16c5',
        'a16c6',
        'a16c7',
        'a16c8',
        'a17c1',
        'a17c2',
        'a17c3',
        'a17c4',
        'a17c5',
        'a17c6',
        'a17c7',
        'a17c8',
        'a18c1',
        'a18c2',
        'a18c3',
        'a18c4',
        'a18c5',
        'a18c6',
        'a18c7',
        'a18c8',
        'a19c1',
        'a19c2',
        'a19c3',
        'a19c4',
        'a19c5',
        'a19c6',
        'a19c7',
        'a19c8',
        'a20c1',
        'a20c2',
        'a20c3',
        'a20c4',
        'a20c5',
        'a20c6',
        'a20c7',
        'a20c8',
        'a21c1',
        'a21c2',
        'a21c3',
        'a21c4',
        'a21c5',
        'a21c6',
        'a21c7',
        'a21c8',
        'a22c1',
        'a22c2',
        'a22c3',
        'a22c4',
        'a22c5',
        'a22c6',
        'a22c7',
        'a22c8',
        'a23c1',
        'a23c2',
        'a23c3',
        'a23c4',
        'a23c5',
        'a23c6',
        'a23c7',
        'a23c8',
        'a24c1',
        'a24c2',
        'a24c3',
        'a24c4',
        'a24c5',
        'a24c6',
        'a24c7',
        'a24c8',
        'a25c1',
        'a25c2',
        'a25c3',
        'a25c4',
        'a25c5',
        'a25c6',
        'a25c7',
        'a25c8',
        'a26c1',
        'a26c2',
        'a26c3',
        'a26c4',
        'a26c5',
        'a26c6',
        'a26c7',
        'a26c8',
        'a27c1',
        'a27c2',
        'a27c3',
        'a27c4',
        'a27c5',
        'a27c6',
        'a27c7',
        'a27c8',
        'a28c1',
        'a28c2',
        'a28c3',
        'a28c4',
        'a28c5',
        'a28c6',
        'a28c7',
        'a28c8',
        'a29c1',
        'a29c2',
        'a29c3',
        'a29c4',
        'a29c5',
        'a29c6',
        'a29c7',
        'a29c8',
        'a30c1',
        'a30c2',
        'a30c3',
        'a30c4',
        'a30c5',
        'a30c6',
        'a30c7',
        'a30c8',
        'a31c1',
        'a31c2',
        'a31c3',
        'a31c4',
        'a31c5',
        'a31c6',
        'a31c7',
        'a31c8',
        'a32c1',
        'a32c2',
        'a32c3',
        'a32c4',
        'a32c5',
        'a32c6',
        'a32c7',
        'a32c8',
        'a33c1',
        'a33c2',
        'a33c3',
        'a33c4',
        'a33c5',
        'a33c6',
        'a33c7',
        'a33c8',
        'a34c1',
        'a34c2',
        'a34c3',
        'a34c4',
        'a34c5',
        'a34c6',
        'a34c7',
        'a34c8',
        'a35c1',
        'a35c2',
        'a35c3',
        'a35c4',
        'a35c5',
        'a35c6',
        'a35c7',
        'a35c8',
        'a36c1',
        'a36c2',
        'a36c3',
        'a36c4',
        'a36c5',
        'a36c6',
        'a36c7',
        'a36c8',
        'a37c1',
        'a37c2',
        'a37c3',
        'a37c4',
        'a37c5',
        'a37c6',
        'a37c7',
        'a37c8',
        'a38c1',
        'a38c2',
        'a38c3',
        'a38c4',
        'a38c5',
        'a38c6',
        'a38c7',
        'a38c8',
        'a39c1',
        'a39c2',
        'a39c3',
        'a39c4',
        'a39c5',
        'a39c6',
        'a39c7',
        'a39c8',
        'a40c1',
        'a40c2',
        'a40c3',
        'a40c4',
        'a40c5',
        'a40c6',
        'a40c7',
        'a40c8',
        'a41c1',
        'a41c2',
        'a41c3',
        'a41c4',
        'a41c5',
        'a41c6',
        'a41c7',
        'a41c8',
        'a42c1',
        'a42c2',
        'a42c3',
        'a42c4',
        'a42c5',
        'a42c6',
        'a42c7',
        'a42c8',
        'a43c1',
        'a43c2',
        'a43c3',
        'a43c4',
        'a43c5',
        'a43c6',
        'a43c7',
        'a43c8',
        'a44c1',
        'a44c2',
        'a44c3',
        'a44c4',
        'a44c5',
        'a44c6',
        'a44c7',
        'a44c8',
        'a45c1',
        'a45c2',
        'a45c3',
        'a45c4',
        'a45c5',
        'a45c6',
        'a45c7',
        'a45c8',
    ];
}
