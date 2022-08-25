<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Rencana;
use App\Mail\RencanaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
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
        $schedule->call(function () {
            $rencanas = Rencana::where('status', 'Belum Terlaksana')->get();
            $users = collect([User::where('level', 'Ketua SPI')->first()]);

            foreach ($rencanas as $rencana) {
                $users->push($rencana->auditor1);
                $users->push($rencana->auditor2);
                $users->push($rencana->auditor3);
                $users->push($rencana->auditee);

                foreach ($users as $user) {
                    $hariH = Carbon::parse(date('Y-m-d', strtotime($rencana->monitoring_awal)));
                    $date = Carbon::parse(date('Y-m-d', strtotime(Carbon::now())))
                        ->diffInDays($hariH);
                    if ($date <= 7) {
                        $message = 'No Message';
                        if ($date == 0) {
                            $message = 'Hii, ' . $user->name . '. Ada Jadwal Audit pengadaan barang dan jasa yang akan dilaksanakan hari ini.';
                        } else if ($date == 1) {
                            $message = 'Hii, ' . $user->name . '. Ada Jadwal Audit pengadaan barang dan jasa yang akan dilaksanakan besok.';
                        } else {
                            $message = 'Hii, ' . $user->name . '. Ada Jadwal Audit pengadaan barang dan jasa yang akan dilaksanakan ' . $date . ' hari lagi pada ' . date('Y-m-d', strtotime($rencana->monitoring_awal)) . '.';
                        }
                        Mail::to($user->email)->send(new RencanaMail($user->name, $message));
                    }
                }
            }
        })
            ->everyMinute();
        // ->dailyAt('05:00');


        $schedule->call(function () {
            $users = collect([User::where('level', 'Ketua SPI')->first()]);
            $rencanas = Rencana::where('status', 'Belum Terlaksana')->get();
            foreach ($rencanas as $rencana) {
                $late = (Carbon::now()->toDateString() > $rencana->monitoring_akhir); //sudah terlewat?

                if ($late == true) {
                    $users->push($rencana->auditor1);
                    $users->push($rencana->auditor2);
                    $users->push($rencana->auditor3);
                    $users->push($rencana->auditee);

                    foreach ($users as $user) {
                        $message = 'Hii, ' . $user->name . '. Ada Jadwal Audit pengadaan barang dan jasa yang tidak terlaksana pada hari ini';


                        Mail::to($user->email)->send(new RencanaMail($user->name, $message));
                    }

                    Rencana::where('id', $rencana->id)->update([
                        'status' => 'Tidak Terlaksana'
                    ]);
                }
            }
        })
            ->dailyAt('05:00');
        // ->everyMinute();

        // retry all failed_jobs
        $schedule->call(function () {
            Artisan::call('queue:retry all');
        })
            // ->everyMinute();
            ->everyThreeHours();
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
