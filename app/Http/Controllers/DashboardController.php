<?php
namespace App\Http\Controllers;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Pendaftaran;

class DashboardController extends Controller
{
    public function index()
    {
        $pasienCount = Pasien::count();
        $dokterCount = Dokter::count();
        $pendaftaranCount = Pendaftaran::count();
        $pendingCount = Pendaftaran::where('status', 'pending')->count();
        $approvedCount = Pendaftaran::where('status', 'approved')->count();
        $rejectedCount = Pendaftaran::where('status', 'rejected')->count();

        return view('dashboard', compact('pasienCount', 'dokterCount', 'pendaftaranCount', 'pendingCount', 'approvedCount', 'rejectedCount'));
    }
}