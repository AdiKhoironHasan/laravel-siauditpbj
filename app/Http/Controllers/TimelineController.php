<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\User;
use App\Models\Visit;
use App\Models\Berita;
use App\Models\KerjaDesk;
use App\Models\KerjaVisit;
use App\Models\Rencana;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TimelineController extends Controller
{
    public function show($id)
    {
        $data['title'] = 'Timeline';
        $rencana = Rencana::where('id', $id)->first();
        $data['timeline'] =  Timeline::where('rencana_id', $id)->first();
        $data['kerja_desk'] = KerjaDesk::where('rencana_id', $rencana->id)->first();
        $data['kerja_visit'] = '';

        if ($data['kerja_desk']) {
            $data['kerja_visit'] = KerjaVisit::where('kerja_desk_id', $data['kerja_desk']->id)->first();

            $desk = Desk::where('kerja_desk_id', $data['kerja_desk']->id)->first();
            $data['desk'] = $desk;
            $data['visit'] = '';
            $data['ketua'] = User::firstWhere('level', 'Ketua SPI');
            if ($desk) {
                $visit = Visit::where('desk_id', $desk->id)->first();
                $data['visit'] = $visit;
                if ($visit) {
                    $berita = Berita::where('visit_id', $visit->id)->first();
                    $data['berita'] = $berita;
                }
            }
        }

        return view('timeline', $data);
    }

    public function kerjaDesk($id)
    {
        return view('kerja_desk.index', [
            'title' => 'KKA Desk',
            'rencana' => Rencana::where('id', $id)->first(),
        ]);
    }

    public function kerjaVisit($id)
    {
        return view('kerja_visit.index', [
            'title' => 'KKA Visit',
            'rencana' => Rencana::where('id', $id)->first(),
        ]);
    }

    public function desk($id)
    {
        return view('desk.index', [
            'title' => 'Data Desk',
            'rencana' => Rencana::where('id', $id)->first(),
            'ketua' => User::where('level', 'Ketua SPI')->first()
        ]);
    }

    public function visit($id)
    {
        return view('visit.index', [
            'title' => 'Data Visit',
            'rencana' => Rencana::where('id', $id)->first(),
            'ketua' => User::where('level', 'Ketua SPI')->first()
        ]);
    }

    public function confirmDesk($id, Request $request)
    {
        $rules = [
            'desk_id' => 'required',
            'status' => 'required',
            'rencana_perbaikan' => 'required',
            'tanggapan_auditee' => 'required'
        ];
        // Arr::except($array, ['price']);

        $rules = Arr::except($rules, ['desk_id', 'status']);

        $validatedData = $request->validate($rules);

        Desk::where('id', $request->desk_id)->update($validatedData);

        Timeline::where('rencana_id', $id)->update([
            'konfirmasi_desk' => 1
        ]);

        return redirect('/rencana/timeline/' . $id)->with('success', 'Data Audit berhasil dikonfirmasi!');
    }

    public function confirm($id, Request $request)
    {
        return ($request->visit_id);

        $rules = [
            'visit_id' => 'required',
            'status' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['tanggal'] = Carbon::now('Asia/Jakarta');

        DB::beginTransaction();
        $berita = Berita::create($validatedData);
        Rencana::findOrFail($id)->update(['status' => 'Terlaksana']);
        Timeline::where('rencana_id', $id)->update(['berita_id' => $berita->id]);
        DB::commit();

        return redirect('/rencana/timeline/' . $id)->with('success', 'Data Audit berhasil dikonfirmasi!');
    }
}
