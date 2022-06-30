@extends('principal')
@section('conteudo')



            <table id="table" class="table b2p5">
                <thead>
                    <tr class="bg-info">
                        <th>Ações</th>
                        <th>CPF</th>
                        <th>NOME</th>
                        <th>Data Início</th>
                        <th>Data Fim</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $key => $data)
                        <tr>
                            <th>
                                <a class=" bg-gradient-success" href="pdf/{{ $data->cpf }}">Gerar Doc</a>
                                <a class=" bg-gradient-success" href="cadastro-editar/{{ $data->id }}">Editar</a>
                            </th>
                            <th>{{ $data->cpf }}</th>
                            <th>{{ $data->nome }}</th>
                            <th>{{ $data->dtini }}</th>
                            <th>{{ $data->dtfim }}</th>
                            <th><?php
                            $data1 = $data->dtini;
                            $data2 = $data->dtfim;
                            
                            $data1 = implode('-', array_reverse(explode('/', $data1)));
                            $data2 = implode('-', array_reverse(explode('/', $data2)));
                            
                            $d1 = strtotime($data1);
                            $d2 = strtotime($data2);
                            
                            $dataFinal = ($d2 - $d1) / 86400;
                            
                            if ($dataFinal < 0) {
                                $dataFinal *= -1;
                            }
                            
                            echo $dataFinal;
                            ?></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                $(document).ready(function() {
                    $('#table').DataTable();
                });
            </script>
        </div>
    @stop
