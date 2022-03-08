<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use App\Models\Socio;
use App\Models\Cliente;
use App\Models\Pagamento;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function socioPdf()
    {
        $socios = Socio::all();

        view()->share('users-pdf',$socios);
        $pdf = PDF::loadView('users-pdf', ['socios' => $socios]);
        return $pdf->download('users.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientePdf()
    {
        $clientes = Cliente::all();

        view()->share('clientes-pdf',$clientes);
        $pdf = PDF::loadView('clientes-pdf', ['clientes' => $clientes]);
        return $pdf->download('clientes.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagamentoPdf()
    {
        $pagamentos = Pagamento::all();

        view()->share('pagamento-pdf', $pagamentos);
        $pdf = PDF::loadView('pagamento-pdf', ['pagamentos' => $pagamentos]);
        return $pdf->download('pagamento.pdf');
    }
}