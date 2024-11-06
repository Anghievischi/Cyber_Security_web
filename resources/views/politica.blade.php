@extends('layout.master')
@section('title', 'Política de Privacidade')
@section('content')

    <section class="politica">
        <div class="container">
            <h1 class="__titleMain" style="margin-top: 70px;">Política de Privacidade</h1>

            <h2>DA LEI GERAL DE PROTEÇÃO DE DADOS</h2>

            <p>A Lei Geral de Proteção de Dados Pessoais (LGPD), Lei n° 13.709/2018, foi criada
                para resguardar a privacidade e a soberania de cada indivíduo sobre os seus dados, cuja
                legislação exige a clareza quanto a utilização, finalidade, transparência e segurança quanto
                aos dados utilizados pela empresa e fornecidos pelo titular.</p>

            <p>Nosso site coleta e faz uso de alguns dados pessoais, de maneira a viabilizar a
                prestação de serviços e aprimorar sua experiência.</p>

            <p>Ao acessá-lo, você concorda com a coleta e utilização de informações pessoais,
                conforme descrito em nossa Política de Privacidade, de acordo com a Lei Geral de Proteção
                de Dados (LGPD, Lei Federal 13.709/2018), das disposições da Lei Federal 8078/1990 e as
                demais normas nacionais e internacionais.</p>

            <p>Deseja receber informações sobre como utilizamos e gerenciamos os seus dados, as
                finalidades e os tipos de informações compartilhadas? Entre em contato:
                <a href="mailto:{{ $dataPolitica['email'] }}">{{ $dataPolitica['email'] }}</a>
            </p>

            <h2>ESPECIFICAÇÃO DE DADOS DE ACORDO COM A LGPD</h2>

            <p>Visando a transparência que é objetivo primaz da LGPD, necessário se faz promover
                a elucidação do que significa o tratamento dos dados que a {{ $dataPolitica['nome'] }} poderá realizar,
                através
                de seus agentes de tratamento, bem como os conceitos acerca dos DADOS PESSOAIS e
                SENSÍVEIS eventualmente armazenados e tratados.</p>

            <p>Entende-se como DADO PESSOAL: São dados pessoais que permitam identificar
                uma pessoa natural, tais como: nome, data de nascimento, CPF, e-mail, RG, dados de
                localização e outros. informação relacionada a pessoa natural identificada ou identificável.</p>

            <p>Por sua vez, existem DADOS SENSÍVEIS, que conforme a legislação, podem ser
                considerados como: dado pessoal sobre origem racial ou étnica, convicção religiosa, opinião
                política, filiação a sindicato ou a organização de caráter religioso, filosófico ou político, dado
                referente à saúde ou à vida sexual, dado genético ou biométrico, quando vinculado a uma
                pessoa natural.</p>

            <p>Contudo, nós da {{ $dataPolitica['nome'] }}, inobstante o consentimento necessário para utilização,
                tratamento e armazenamento de eventuais dados sensíveis, declaramos que para exercício
                de nossa atividade não são necessários tratamentos de dados sensíveis, salvo exceções
                que devidamente autorizadas pelo titular do dado.</p>

            <h2>DADOS DE TRATAMENTO E FINALIDADE</h2>

            <p>Importante registrar que APENAS com a sua autorização coletaremos seus dados
                pessoais. O uso de cookies – e outras ferramentas de coleta de dados – tem o propósito de
                melhorar a experiência do usuário em nosso site. </p>

            <h3>DADOS E INFORMAÇÕES COLETADAS:</h3>

            <p>Ao acessar ou interagir com uma página da {{ $dataPolitica['nome'] }}, poderão ser coletadas informações
                sobre suas interações, dados de navegação, pessoais ou profissionais, que podem incluir,
                mas não se limitar a, seu nome, número de telefone, endereço de e-mail, dados sobre seu
                dispositivo, localização, IDs de aplicativos relacionados, cookies e tecnologias similares.
                Essas informações, coletadas somente para conhecimento, serão inseridas por você em
                resposta a solicitações ou ao preencher nossos formulários.</p>

            <div class="--red">
                <h3>INFORMAÇÕES E DADOS NÃO PASSÍVEIS DE COLETA:</h3>

                <p>Não solicitamos informações financeiras, como por exemplo: números de cartão de
                    crédito e contas, carteira de motorista, número do passaporte, nem dados sensíveis (como
                    biometria e informações sobre política e religião).</p>
            </div>
            <h3>PESSOAL AUTORIZADO E MEDIDAS DE SALVAGUARDA:</h3>

            <p>A {{ $dataPolitica['nome'] }} se compromete a tomar medidas adequadas para impedir o acesso não
                autorizado, divulgação, alteração ou destruição não autorizada dos seus dados. Em alguns
                casos, como análise de relatórios de desempenho e eficiência do site, parte dos dados
                poderá ser acessada por certos tipos de pessoas encarregadas, envolvidas com a operação
                dentro da empresa (colaboradores) ou prestadores de serviços - técnicos, empresas de TI e
                provedores de hospedagem, nomeados, caso necessário, como Processadores de Dados. </p>

            <p>A lista atualizada destas partes pode ser solicitada a qualquer momento por e-mail.</p>
            <p>Ainda, importante registrar que em caso de invasão ao nosso site, eventuais dados
                tratados e eventualmente vazados, ensejarão na imediata comunicação por parte dos
                agentes de tratamento de nosso site a ANPD (Agência Nacional de Proteção de Dados),
                bem como emitiremos comunicação aos clientes e titulares dos dados tratados, em rigorosa
                observância às regras da LGPD.</p>

            <h2>POLÍTICA DE PRIVACIDADE</h2>

            <p>Na {{ $dataPolitica['nome'] }}, engajados com as responsabilidades e obrigações da LGPD,
                consignamos que a privacidade e segurança são prioridades e nos comprometemos com a
                transparência do tratamento de dados pessoais dos nossos usuários/clientes. Por isso, a
                presente Política de Privacidade estabelece como é feita a coleta, uso e transferência de
                informações de clientes ou outras pessoas que acessam ou usam nosso site.</p>
            <h2>COOKIES</h2>
            <p>A {{ $dataPolitica['nome'] }} faz uso de Cookies, que são arquivos de texto enviados pela plataforma
                ao seu computador e que nele se armazenam, que contém informações relacionadas à
                navegação do site. Em suma, os Cookies são utilizados para aprimorar a experiência de uso.
                Ao acessar nosso site e consentir com o uso de Cookies, você manifesta conhecer e aceitar
                a utilização de um sistema de coleta de dados de navegação com o uso de Cookies em seu
                dispositivo</p>
            <p>Você pode, a qualquer tempo e sem nenhum custo, alterar as permissões, bloquear
                ou recusar os Cookies. Todavia, a revogação do consentimento de determinados Cookies
                pode inviabilizar o funcionamento correto de alguns recursos da plataforma.</p>

            <h2>UTILIZAÇÃO E TRATAMENTO DOS DADOS NA {{ $dataPolitica['nome'] }}</h2>
            <p>Em conformidade com as exigências da LGPD, a {{ $dataPolitica['nome'] }}, de forma transparente, clara,
                e objetiva, esclarece ao titular dos dados a forma de utilização e tratamento destes, bem
                como informando em quais situações, de acordo com a legislação vigente, são efetivamente
                tratados os dados fornecidos:</p>

            <p class="--abc">
                a) Quando o fornecimento for necessário para o cumprimento de um contrato com o
                usuário e/ou quaisquer obrigações pré-contratuais do mesmo;
                <br>
                b) O processamento for necessário para cumprir obrigações jurídicas que a {{ $dataPolitica['nome'] }}
                estiver sujeita;
                <br>
                c) Quando estiver relacionado a uma tarefa de interesse público ou no exercício de uma
                autorização oficial na qual a {{ $dataPolitica['nome'] }} estiver investida;
                <br>
                d) For necessário para a finalidade de interesses legítimos pretendidos pela {{ $dataPolitica['nome'] }} ou
                por um terceiro;
                <br>
                e) O Usuário tenha autorizado para uma ou mais finalidades específicas: organização
            </p>

            <p>Observação: de acordo com a LGPD, a {{ $dataPolitica['nome'] }} poderá processar os dados pessoais até o
                momento em que o usuário faça objeção a isto (“opt-out”), sem necessitar de concordâncias
                adicionais ou quaisquer outras bases jurídicas a seguir. Isto, contudo, não se aplica sempre
                que o processamento de Dados Pessoais estiver sujeito à legislação europeia de proteção
                de dados</p>

            <p>A {{ $dataPolitica['nome'] }} se prontifica a esclarecer, a qualquer momento, qual é a base jurídica
                aplicada ao processamento, se o fornecimento de Dados é um requisito obrigatório por força
                de lei ou contratual, ou uma exigência necessária para celebrar um contrato.</p>

            <h2>COMPARTILHAMENTO E PRAZO DE ARMAZENAMENTO DE DADOS</h2>

            <p>Os dados são processados nas sedes de operação da {{ $dataPolitica['nome'] }} e em quaisquer
                outros locais onde as partes envolvidas com o processamento estiverem localizadas. De
                acordo com a localização do usuário e a base da empresa, o processamento de dados
                poderá envolver a transferência dos Dados do Usuário para outro país que não seja o seu.</p>

            <p>É seu direito ser informado sobre a base jurídica das transferências de dados para
                países fora da União Europeia, de seu país de origem e qualquer organização internacional
                regida pelo direito internacional público ou formada por dois ou mais países, tal como a ONU,
                e sobre as medidas de segurança tomadas pela {{ $dataPolitica['nome'] }} para seu resguardo.</p>

            <p>Caso tais transferências sejam executadas e você queira saber mais a respeito, fale
                conosco utilizando as informações fornecidas na seção de Contato, canais abertos de
                contato direto com os agentes de tratamento para com os titulares dos dados fornecidos,
                conforme regras da LGPD.</p>

            <p>Ainda, as informações serão processadas e armazenadas pelo tempo julgado necessário
                para as finalidades para as quais foram coletadas. Desse modo, os dados coletados para
                propósitos:</p>

            <p class="--abc">
                • Relacionados à execução de contrato entre a {{ $dataPolitica['nome'] }} e o usuário serão
                conservados até que tal contrato tenha sido finalizado. <br>
                • Relacionados aos legítimos interesses da {{ $dataPolitica['nome'] }} serão armazenados pelo
                tempo pertinente para cumprir tais finalidades da empresa. <br>
                • Informações específicas sobre os interesses legítimos da Companhia podem ser
                obtidas entrando em contato conosco. <br>
                • A {{ $dataPolitica['nome'] }} poderá solicitar permissão para manter as informações por um
                período superior ao inicialmente autorizado sempre que o usuário tiver concedido
                consentimento para tal diligência. <br>
                • A {{ $dataPolitica['nome'] }} poderá ficar obrigada a prolongar o período de conservação das
                informações em todas as ocasiões em que estiver obrigada a fazê-lo para o
                cumprimento de uma obrigação jurídica ou mandado.
            </p>

            <p>No momento em que o período autorizado de armazenamento e tratamento se encerrar,
                seus dados serão excluídos de nossos bancos de dados. Sendo assim, o direito de acessar,
                excluir, corrigir e a portabilidade dos mesmos não poderão ter o seu cumprimento exigido à
                empresa após o vencimento do prazo.</p>

            <h2>CONSENTIMENTO PARA TRATAMENTO DE DADOS</h2>

            <p>É a partir do seu consentimento que tratamos os seus dados pessoais. O
                consentimento é a manifestação livre, informada e inequívoca pela qual você autoriza
                a {{ $dataPolitica['nome'] }} a tratar seus dados, cujo consentimento pode ser expresso ou tácito.</p>

            <p>Assim, em consonância com a Lei Geral de Proteção de Dados, seus dados só serão
                coletados, tratados e armazenados mediante prévio consentimento, que será obtido de
                forma específica para cada finalidade acima descrita, evidenciando o compromisso de
                transparência e boa-fé da {{ $dataPolitica['nome'] }} para com seus usuários/clientes, seguindo as
                regulações
                legislativas pertinentes.</p>

            <p>Ao utilizar os serviços da {{ $dataPolitica['nome'] }} e fornecer seus dados pessoais, você está ciente
                e consentindo com as disposições desta Política de Privacidade, além de conhecer seus
                direitos e como exercê-los, registrando que a qualquer tempo e sem nenhum custo, você
                poderá revogar seu consentimento, caso entenda pertinente.</p>

            <p>Por fim, importante destacar que a revogação do consentimento para o tratamento
                dos dados pode implicar a impossibilidade da performance adequada de alguma
                funcionalidade do site que dependa da operação cujas consequências serão informadas
                previamente ao cliente e titular dos dados.</p>

            <h2>SEUS DIREITOS</h2>

            <p>A Lei Geral de Proteção de Dados Pessoais (Lei no 13.709/18), no art. 18, elenca os
                direitos dos titulares dos dados pessoais, os quais podemos citar:</p>

            <p class="--abc">

                • <span>Remover sua autorização a qualquer momento: </span>Direito de retirar seu
                consentimento caso tenha fornecido anteriormente para o processamento dos
                seus dados pessoais.
                <br>
                • <span>Questionar o processamento dos seus dados:</span> Direito de contestar o
                processamento dos seus dados se o mesmo for executado sobre outra base
                jurídica que não o consentimento explícito. São fornecidos detalhes na seção
                específica seguinte a esta.
                <br>
                • <span>Acessar seus dados:</span> Direito de tomar conhecimento sobre a forma como seus
                dados são tratados pela {{ $dataPolitica['nome'] }}, ter acesso a determinados aspectos do
                tratamento dos dados coletados.
                <br>
                • <span>Verificar e solicitar correção:</span> Direito de verificar a fidedignidade e transparência
                dos seus dados e solicitar que sejam atualizados ou corrigidos.
                <br>
                • <span>Limitar o processamento dos seus dados:</span> Direito de, em determinadas
                circunstâncias, delimitar em que medida pode ser realizado o processamento
                para qualquer outra finalidade que não seja o simples armazenamento.
                <br>
                • <span>Ter os seus dados pessoais apagados ou removidos de outra maneira:</span> Sob
                determinadas circunstâncias, é possível obter a eliminação de seus dados,
                armazenados pela {{ $dataPolitica['nome'] }}.
                <br>
                • <span>Receber e transferir seus dados para outro controlador:</span> Direito de recebê-los
                de maneira estruturada, apta a ser lida por máquinas e, se possível, torná-los
                facilmente enviáveis a outro controlador. Esta deliberação se aplica a meios
                automatizados, com processamento baseado em seu consentimento, em
                contrato do qual seja uma das partes.
                <br>
                • <span>Registrar reclamação:</span> Direito de registrar reclamação perante a autoridade de
                proteção de dados competente.
            </p>

            <p>Frise-se que, nos termos da LGPD, não há um direito de eliminação de dados tratados
                com fundamento em bases legais distintas do consentimento, salvo ocasiões em que
                evidenciado que os dados sejam desnecessários, excessivos ou tratados em
                desconformidade com o previsto na lei.</p>

            <p>Na razão de processamento com base no interesse público, no exercício de uma
                autorização oficial na qual a {{ $dataPolitica['nome'] }} estiver investida ou para finalidades dos
                interesses
                legítimos objetivados por ela, tal processamento poderá ser contestado por meio do
                fornecimento de justificativa relacionada a sua situação para fundamentar a objeção.
                {{ $dataPolitica['link'] }}</p>

            <p>Entretanto, caso os seus dados pessoais sejam processados para finalidades de
                marketing direto, é possível contestar o processamento a qualquer momento, sem
                necessidade de fornecer justificativa.</p>

            <h2>COMO EXERCER SEUS DIREITOS</h2>

            <p>Quaisquer pedidos para exercer seus direitos podem ser direcionados à {{ $dataPolitica['nome'] }}
                pelos meios informados na seção Contato deste site, sem nenhum custo, e serão atendidos
                com a maior brevidade possível e prazo inferior a um mês.</p>

            <h2>AÇÕES JURÍDICAS E DETERMINAÇÕES LEGAIS</h2>
            <p>Os dados pessoais do usuário podem ser utilizados para fins jurídicos pela {{ $dataPolitica['nome'] }}
                em juízo ou nas etapas conducentes à possível ação jurídica decorrente de uso indevido
                deste domínio ou serviços relacionados.</p>
            <p>Esteja ciente de que a {{ $dataPolitica['nome'] }} poderá ser obrigada a revelar seus dados mediante
                solicitação das autoridades governamentais.</p>
            <h2>ALTERAÇÕES DE POLÍTICA DE PRIVACIDADE</h2>
            <p>A presente versão desta Política de Privacidade foi atualizada pela última vez em:
                {{ $dataPolitica['data_modificacao'] }}.</p>
            <p>A {{ $dataPolitica['nome'] }} se reserva o direito de alterar esta Política de Privacidade a qualquer
                momento e notificar seus usuários nesta página e/ou – na medida em que for técnica e
                juridicamente necessária – enviar um aviso por meio de quaisquer informações de contato
                disponíveis. </p>
            <p>Recomendamos verificar esta página periodicamente, consultando a data da última
                modificação informada na parte superior. Caso as mudanças afetem as atividades de
                processamento realizadas com base em seu consentimento, será coletada nova autorização
                dos usuários, onde for exigida.</p>
            <p style="color:#012E40; font-weight: 600;">Ainda possui dúvidas acerca do armazenamento, tratamento, e
                utilização dos seus
                dados? Entre em contato pelo e-mail: <a
                    href="mailto:{{ $dataPolitica['email'] }}">{{ $dataPolitica['email'] }}.</a></p>

        </div>
    </section><!-- politica -->

@endsection
