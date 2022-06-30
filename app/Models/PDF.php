<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    use HasFactory;

    public function gerarPDF($cpf)
    {

        $header = '
        <style>
            table {
            }
            td {
                border: solid 1px gray;
                background: #cecaca;
            }

        </style>
        <div class="main">
        <div class="inner">
            <div class="bg-gray">
                <h1> Dados Cadastrados</h1>
            </div>
        </div>
        <img src="../resources/img/logo.png" alt="">
        ';


        $dadosCadastrados =  pessoa::where('cpf', $cpf)->get();

        $table = "<table>
                    <tr>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Entrou</td>
                        <td>Saiu</td>
                        <td>Intevalo</td>
                        ";
        $totalDias = 0;
        foreach ($dadosCadastrados as $key => $data) {

            $data1 = $data->dtini;
            $data2 = $data->dtfim;

            $data1 = implode('-', array_reverse(explode('/', $data1)));
            $data2 = implode('-', array_reverse(explode('/', $data2)));

            $d1 = strtotime($data1);
            $d2 = strtotime($data2);

            $intervalo = ($d2 - $d1) / 86400;

            if ($intervalo < 0) {
                $intervalo *= -1;
            }

            $table .= '<tr>
                        <td>' . $data->nome . '</td>
                        <td>' . $data->cpf . '</td>
                        <td>' . $data->dtini . '</td>
                        <td>' . $data->dtfim . '</td>
                        <td>' . $intervalo . ' dias</td>
                      </tr>';
            $totalDias += $intervalo;
        }
        $table .= '</table>';

        $resultado = '<h2>Um total de ' . $totalDias . ' trabalhados</h2>';


        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($header . $table . $resultado);




        $mpdf->Output();

        $pdf = $mpdf->stream();

        return $pdf;
    }
}
