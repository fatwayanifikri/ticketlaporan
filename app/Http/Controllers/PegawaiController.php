<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{

//-------------------------Index--------------------//


  public function index()
{
    return view('index');
}

	//-------------------------VIEW CLOSED TICKET--------------------//

  public function viewclosed()
    {
    	// mengambil data dari table pegawai
		$ticket = DB::table('ticket')->where ('status_ticket', 'CLOSED')->get();
 
    	// mengirim data pegawai ke view index
    	return view('viewclosed',['ticket' => $ticket]);
 
    }
	
//-------------------------VIEW ACTIVE TICKET--------------------//

    public function viewactive()
    {
    	// mengambil data dari table pegawai
		$ticket = DB::table('ticket')->where ('status_ticket', 'ACTIVE')->get();
 
    	// mengirim data pegawai ke view index
    	return view('viewactive',['ticket' => $ticket]);
 
    }
	
//-------------------------VIEW REPORT--------------------//

    public function report()
    {
    	// mengambil data dari table pegawai
		$ticket = DB::table('ticket')->where ('status_ticket', 'ACTIVE')->get();
 
    	// mengirim data pegawai ke view index
    	return view('report',['ticket' => $ticket]);
 
    }

//-------------------------CARI TICKET NUMBER--------------------//

		public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$ticket = DB::table('ticket')
		->where('ticket_number','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('report',['ticket' => $ticket]);
 
	}
	
//-------------------------INPUT------------------//

	public function tambah()
{ 
	// memanggil view tambah
	return view('tambah');
}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
 
}

//-------------------------EDIT(INPUT REPORT)--------------------//

// method untuk UPDATE data ke table pegawai
public function edit($id)
{
	// mengambil data ticket berdasarkan id yang dipilih
	$ticket = DB::table('ticket')->where('t_id',$id)->get();
	// passing data ticket yang didapat ke view edit.blade.php
	return view('formreport',['ticket' => $ticket]);
}

// update data ticket
public function update(Request $request)
{
	// update data ticket
	DB::table('ticket')->where('t_id',$request->id)->update([
		'ticket_number' => $request->number,
		'teknisi' => $request->tukang,
		'tgl_kerja' => $request->tanggal,
		'status_kerja' => $request->status,
		'action' => $request->aksi,
		'remark' => $request->remark
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/ticket');
}


//-------------------------HAPUS--------------------//

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
}