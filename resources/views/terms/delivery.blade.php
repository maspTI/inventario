<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Termo de Responsabilidade {{ $device->holder->name }}</title>
    <link rel="stylesheet" href="{{ secure_asset('css/term.css') }}">
</head>
<body>
    <page size="A4" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-right masp-logo">MASP</h1>
            </div>
            <div class="col-md-12 cabecalho">
                <h6 class="text-center cabecalho--titulo">Termo de responsabilidade</h6>
                <h6 class="text-center cabecalho--titulo">guarda e uso de equipamentos corporativos</h6>
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
                            <td class="text-capitalize">{{ $device->holder->name }}</td>
                        </tr>
                        <tr>
                            <th>Função</th>
                            <td class="text-capitalize">{{ $device->holder->role ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Depto.</th>
                            <td class="text-capitalize">{{ $device->holder->department->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Matrícula/CPF</th>
                            <td class="text-capitalize">{{ $device->holder->registration_code ?? '' }} {{ $device->holder->cpf_cnpj ?? '' }}</td>
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
                            <td class="text-capitalize">{{ $device->pattern->name }}</td>
                        </tr>
                        <tr>
                            <th>Acessórios</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Patrimônio</th>
                            <td>{{ $device->property_tag ?? '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-justify">Declaro ter recebido do Museu de Arte de São Paulo Assis Chateaubriand (“MASP”), a título de empréstimo, o equipamento descrito neste Termo de Responsabilidade, comprometendo-me a mantê-lo em perfeito estado de conservação, ciente de que:</p>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12">
                <ol>
                    <li class="text-justify">Cumprirei com as Normas de Utilização de Equipamentos Corporativos (Anexo I).</li>
                    <li class="text-justify">Em caso de roubo ou furto do aparelho, o MASP providenciará a reposição do equipamento sem cobrança adicional de valores ao colaborador, que deverá notificar por escrito o Museu mediante a apresentação do respectivo Boletim de Ocorrência em até 48 (quarenta e oito) horas úteis.</li>
                    <li class="text-justify">Nos casos em que o equipamento for danificado ou inutilizado por uso inadequado, negligência ou em caso de extravio, o MASP providenciará a substituição do equipamento por outro similar ou equivalente disponível no mercado, e cobrará do colaborador o valor correspondente à reposição.</li>
                    <li class="text-justify">No caso de rescisão do meu contrato de trabalho, o equipamento será devolvido completo, em perfeito estado de conservação, considerando-se o tempo de vida útil do equipamento, ao Departamento de Tecnologia de Informação do Museu.</li>
                    <li class="text-justify">O MASP providenciará a assistência técnica e o apoio necessário para o uso corrente do equipamento.</li>
                </ol>
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
                <p class="text-center">{{ $device->holder->name }}</p>
            </div>
        </div>
        <div class="row footer">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <span class="footer-museu">MUSEU DE ARTE DE SÃO PAULO ASSIS CHATEAUBRIAND</span>
                <span class="footer-endereco"> Av Paulista, 1578 01310-200 São Paulo SP Brasil T +55 11 31495959 www.masp.org.br</span>
            </div>
        </div>
    </page>
    <page size="A4" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-right masp-logo">MASP</h1>
            </div>
            <div class="col-md-12 cabecalho">
                <h6 class="text-center cabecalho--titulo">ANEXO I</h6>
                <h6 class="text-center cabecalho--titulo">NORMAS DE UTILIZAÇÃO DE Equipamentos CORPORATIVOS</h6>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-justify">Declaro que utilizarei o computador corporativo, fornecidos a título de empréstimo pelo Museu de Arte de São Paulo Assis Chateaubriand (“MASP”) para meu uso, ciente e comprometido em honrar as seguintes Normas de Utilização:</p>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12">
                <ol>
                    <li class="text-justify">A utilização do computador corporativo não constitui benefício para os(as) colaboradores(as), mas concessão de ferramenta de trabalho. A utilização dos computadores está restrita à consecução dos objetivos profissionais do(a) colaborador(a).</li>
                    <li class="text-justify">Os computadores corporativos estão sujeitos à manutenção preventiva pelo departamento de Tecnologia de Informação do MASP, que poderá requisitar a entrega dos aparelhos para atualização, alteração de sistemas ou substituição.</li>
                    <li class="text-justify">O MASP garante que em nenhuma hipótese fará uso ofensivo ou injustificado da intimidade dos funcionários, bem como não divulgará informações ou documentos, a partir de dados que porventura acessar na exclusiva função de monitoramento realizada pelo departamento de Tecnologia de Informação.</li>
                    <li class="text-justify">Toda informação relacionada às atividades do Museu é sigilosa e o(a) colaborador(a) tem o dever de envidar seus melhores esforços para preservar o sigilo de informação confidencial e de quaisquer outras informações que possam prejudicar as atividades da Instituição, seus patrocinadores e/ou parceiros.</li>
                    <li class="text-justify">O(A) colaborador(a) se compromete a respeitar a propriedade intelectual de programa de computador e os direitos de autor, em consonância às leis 9.609/98 e 9.610/98.</li>
                </ol>
            </div>
        </div>
        <div class="row footer">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <span class="footer-museu">MUSEU DE ARTE DE SÃO PAULO ASSIS CHATEAUBRIAND</span>
                <span class="footer-endereco"> Av Paulista, 1578 01310-200 São Paulo SP Brasil T +55 11 31495959 www.masp.org.br</span>
            </div>
        </div>
    </page>
</body>
</html>
