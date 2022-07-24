<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Rencana;
use App\Mail\RencanaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('queue:retry all')->everyMinute()->timezone('Asia/Jakarta');

        $schedule->call(function () {
            $rencanas = Rencana::where('status', 'Belum Terlaksana')->get();
            $users = collect([User::where('level', 'Ketua SPI')->first()]);

            foreach ($rencanas as $rencana) {
                $users->push($rencana->auditor1);
                $users->push($rencana->auditor2);
                $users->push($rencana->auditor3);
                $users->push($rencana->auditee);

                foreach ($users as $user) {
                    $date = Carbon::parse(date('Y-m-d', strtotime(Carbon::now())))
                        ->diffInDays(Carbon::parse(date('Y-m-d', strtotime($rencana->monitoring_awal))));
                    if ($date <= 7) {
                        $message = 'No Message';
                        if ($date == 0) {
                            $message = 'Hii, ' . $user->name . '. Audit akan dilaksanakan hari ini <br>';
                        } else if ($date == 1) {
                            $message = 'Hii, ' . $user->name . '. Audit akan dilaksanakan besok <br>';
                        } else {
                            $message = 'Hii, ' . $user->name . '. Audit akan dilaksanakan ' . $date . ' hari lagi <br>';
                        }
                        Mail::to($user->email)->send(new RencanaMail($user->name, $message));
                    }
                }
            }

            $rencanas = Rencana::where('status', 'Belum Terlaksana')->get();
            foreach ($rencanas as $rencana) {
                $late = (Carbon::now()->toDateString() > $rencana->monitoring_akhir); //sudah terlewat?

                if ($late == true) {
                    Rencana::where('id', $rencana->id)->update([
                        'status' => 'Tidak Terlaksana'
                    ]);

                    Mail::to($user[0]->email)->send(new RencanaMail($user[0]->name, $message));
                }
            }
        })
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
