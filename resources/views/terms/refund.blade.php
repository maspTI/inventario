<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Termo de Devolução {{ $user->name }}</title>
    <link rel="stylesheet" href="{{ secure_asset('css/term.css') }}">
</head>
<body>
    <page size="A4" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-right masp-logo">MASP</h1>
            </div>
            <div class="col-md-12 cabecalho">
                <h6 class="text-center cabecalho--titulo">Termo de devolução</h6>
                <h6 class="text-center cabecalho--titulo">de equipamentos corporativos</h6>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col-md-12">
                <div class="font-weight-bold id">Identificação do(a) Colaborador(a):</div>
            </div>
            <div class="col-md-12">
                <table border='1' class="mt-3">
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <td class="text-capitalize">{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Função</th>
                            <td class="text-capitalize">{{ $user->role ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Depto.</th>
                            <td class="text-capitalize">{{ $user->department->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Matrícula/CPF</th>
                            <td class="text-capitalize">{{ $user->registration_code ?? '' }} {{ $user->cpf_cnpj ?? '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-md-12 mb-2">
                <div class="font-weight-bold id">Descrição do equipamento:</div>
            </div>
            <div class="col-md-12 mt-1">
                <table border='1'>
                    <tbody>
                        <tr>
                            <th>Descrição</th>
                            <td class="text-capitalize">{{ $device->category->name . ' ' . $device->brand->name . ' ' . $device->pattern->name }}</td>
                        </tr>
                        <tr>
                            <th>Modelo</th>
                            <td class="text-capitalize">{{ $device->brand->name . ' ' . $device->pattern->name }}</td>
                        </tr>
                        <tr>
                            <th>Acessórios</th>
                            <td class="text-capitalize"></td>
                        </tr>
                        <tr>
                            <th>Patrimônio</th>
                            <td class="text-capitalize">{{ $device->property_tag }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-justify">Declaro e confirmo a devolução do equipamento descrito no presente Termo, cedido pelo Museu de Arte de São Paulo Assis Chateaubriand, a título de empréstimo.</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <p>São Paulo, {{ $date->day . ' de ' . ucfirst($date->getTranslatedMonthName()) . ' de ' . $date->year }}.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <p class="text-center assinatura"></p>
                <p class="text-center">{{ $user->name }}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <p class="text-center assinatura"></p>
                <p class="text-center">MUSEU DE ARTE DE SÃO PAULO ASSIS CHATEAUBRIAND</p>
                <p class="text-center">[p. {{ $manager->name ?? '' }}]</p>
            </div>
        </div>
        <div class="row footer">
            <div class="col-md-12 d-flex justify-content-between">
                <span class="footer-museu">MUSEU DE ARTE DE SÃO PAULO ASSIS CHATEAUBRIAND</span>
                <span class="footer-endereco"> Av Paulista, 1578 01310-200 São Paulo SP Brasil T +55 11 31495959 www.masp.org.br</span>
            </div>
        </div>
    </page>
</body>
</html>
