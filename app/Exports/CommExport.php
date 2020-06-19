<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Community;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CommExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Community::all();
    }

    public function map($data) : array {
        return [
            $data->community_name,
            $data->cityName->name,
            $data->instagram,
            $data->youtube,
            $data->soundcloud_mixcloud,
            $data->email,
            $data->phone,
            $data->community_created,
            $data->member_1,
            $data->member_2,
            $data->member_3,
            $data->member_4,
            $data->member_5,
            $data->question_1,
            $data->question_2,
            $data->question_3,
            $data->question_4,
            $data->question_5,
            $data->question_6,
            $data->question_7,
            $data->question_8,
            $data->question_9,
            Carbon::parse($data->created_at)->toFormattedDateString()
        ] ;
    }

    public function headings(): array
    {
        return [
            'Nama Komunitas',
            'Kota',
            'Instagram',
            'Youtube',
            'Soundcloud/Mixcloud',
            'Email',
            'Telp',
            'Tanggal Komunitas Dibuat',
            'Anggota 1',
            'Anggota 2',
            'Anggota 3',
            'Anggota 4',
            'Anggota 5',
            'Pertanyaan 1',
            'Pertanyaan 2',
            'Pertanyaan 3',
            'Pertanyaan 4',
            'Pertanyaan 5',
            'Pertanyaan 6',
            'Pertanyaan 7',
            'Pertanyaan 8',
            'Pertanyaan 9',
            'Submit Data',
        ];
    }
}
