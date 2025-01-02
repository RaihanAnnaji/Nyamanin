<?php

namespace App\Http\Controllers;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\{Transaction,payment,kamar,SimpanKamar};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = Auth::user()->role;

        if (Auth::check()) {
            if ($auth == 'Admin') {
                $aktif = Transaction::where('status','Proses')->count(); // Penghuni Aktif
                $total = Transaction::whereIn('status',['Proses','Done'])->count(); // Total Penghuni

                $stok_kamar = kamar::sum('stok_kamar');
                $sisa_kamar = kamar::sum('sisa_kamar');
                $favorite = SimpanKamar::count();
                return view('admin.index', compact('aktif','total','stok_kamar','sisa_kamar','favorite'));
            }
            elseif (Auth::user()->role == 'Pemilik') {
                $aktif = Transaction::where('pemilik_id',Auth::id())->where('status','Proses')->count(); // Penghuni Aktif
                $total = Transaction::where('pemilik_id',Auth::id())->whereIn('status',['Proses','Done'])->count(); // Total Penghuni

                $pendapatan = payment::whereHas('transaksi', function($query) {
                    $query->where('pemilik_id', Auth::id());
                })->sum('jumlah_bayar');
                

                $pendapatanMonth = Payment::whereHas('transaksi', function($query) {
                    $query->where('pemilik_id', Auth::id());
                })
                ->whereYear('updated_at', now()->year)
                ->whereMonth('updated_at', now()->month)
                ->sum('jumlah_bayar');
                

                $pendapatanYear = Payment::whereHas('transaksi', function($query) {
                    $query->where('pemilik_id', Auth::id());
                })
                ->whereYear('updated_at', now()->year)
                ->sum('jumlah_bayar');
                

                $pendapatanPrevYear = Payment::whereHas('transaksi', function($query) {
                    $query->where('pemilik_id', Auth::id());
                })
                ->whereYear('updated_at', now()->subYear()->year)
                ->sum('jumlah_bayar');
                

                $jenis_kamar = kamar::where('user_id',Auth::id())->count();

                $stok_kamar = kamar::where('user_id',Auth::id())->sum('stok_kamar');
                $sisa_kamar = kamar::where('user_id',Auth::id())->sum('sisa_kamar');
                $favorite = SimpanKamar::with(['kamar' => function($x) {
                    $x->where('user_id',Auth::id());
                }])
                ->count();

                return view('pemilik.index', \compact('aktif','total','pendapatan','pendapatanMonth','pendapatanYear','pendapatanPrevYear','jenis_kamar','stok_kamar','sisa_kamar','favorite'));
            } elseif(Auth::user()->role == 'Pencari') {
                $aktif = Transaction::where('user_id',Auth::id())->where('status','Proses')->count();
                return view('user.index', \compact('aktif'));
            } else {
                abort(404);
            }
        }
    }
}
