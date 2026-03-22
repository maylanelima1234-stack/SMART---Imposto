<?php
$whatsappNumber = '5581983280843';
$whatsappMessage = rawurlencode('Olá! Quero atendimento para a Declaração de Imposto de Renda 2026.');
$whatsappLink = "https://wa.me/{$whatsappNumber}?text={$whatsappMessage}";

$logoPath = 'assets/logo-smart-business.png';
$aboutPhotoPath = 'assets/sobre-nos-smart-business.jpg';

$services = [
    'Declaração de Imposto de Renda 2026 com orientação personalizada para empresários e profissionais com CNPJ',
    'Análise de pendências fiscais e regularização para evitar multas, bloqueios e atrasos',
    'Acompanhamento de obrigações acessórias, prazos e documentos obrigatórios',
    'Suporte administrativo estratégico para manter a empresa organizada e segura',
];

$benefits = [
    ['title' => 'Mais segurança fiscal', 'text' => 'Reduza erros, retrabalho e riscos de inconsistências na sua declaração e nas rotinas da empresa.'],
    ['title' => 'Atendimento humanizado', 'text' => 'Você recebe orientação clara, suporte direto e acompanhamento próximo em cada etapa.'],
    ['title' => 'Foco em resultado', 'text' => 'A solução foi desenhada para ajudar empresários a ganharem tempo, controle e tranquilidade.'],
];

$process = [
    ['step' => '1', 'title' => 'Diagnóstico inicial', 'text' => 'Entendemos sua situação fiscal, documentação e principais pendências.'],
    ['step' => '2', 'title' => 'Plano de ação', 'text' => 'Definimos o que precisa ser declarado, regularizado e acompanhado com prioridade.'],
    ['step' => '3', 'title' => 'Execução assistida', 'text' => 'Conduzimos o processo com suporte próximo até a entrega e organização da sua empresa.'],
];

$faq = [
    ['question' => 'Quem deve procurar esse serviço?', 'answer' => 'Empreendedores, profissionais e empresas com CNPJ que precisam declarar com segurança, regularizar pendências ou organizar rotinas fiscais e administrativas.'],
    ['question' => 'O foco é apenas Imposto de Renda?', 'answer' => 'Não. A página destaca a Declaração de Imposto de Renda 2026, mas o atendimento também cobre regularização, obrigações acessórias e suporte administrativo especializado.'],
    ['question' => 'Como funciona o atendimento?', 'answer' => 'O contato inicial pode ser feito pelo WhatsApp. A partir disso, avaliamos o cenário da empresa, organizamos a documentação e orientamos os próximos passos.'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART Business | Declaração de Imposto de Renda 2026</title>
    <meta name="description" content="Landing page para anúncios da SMART Business com foco em Declaração de Imposto de Renda 2026, regularização fiscal e suporte administrativo para empresas com CNPJ.">
    <style>
        :root {
            --bg: #101d2e;
            --bg-soft: #14243a;
            --bg-strong: #0b1522;
            --card: rgba(255, 255, 255, 0.06);
            --card-strong: rgba(255, 255, 255, 0.1);
            --line: rgba(255, 255, 255, 0.12);
            --text: #f5f7fb;
            --muted: #c7d1e1;
            --accent: #5468ff;
            --accent-soft: #8ab4ff;
            --cta: #27e1b1;
            --cta-strong: #79f3d3;
            --warning: #ffd166;
            --shadow: 0 24px 60px rgba(0, 0, 0, 0.3);
            --radius-xl: 30px;
            --radius-lg: 22px;
            --radius-md: 18px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top right, rgba(84, 104, 255, 0.16), transparent 30%),
                linear-gradient(180deg, #101d2e 0%, #0f1b2c 100%);
            line-height: 1.6;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            backdrop-filter: blur(18px);
            background: rgba(16, 29, 46, 0.72);
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        }

        .header-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 16px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .brand-mark {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(84, 104, 255, 0.35), rgba(255, 255, 255, 0.1));
            border: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .brand-mark span {
            font-size: 0.82rem;
            color: var(--muted);
            text-align: center;
            padding: 6px;
        }

        .brand small {
            display: block;
            color: var(--muted);
            font-weight: 400;
            letter-spacing: normal;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 22px;
            border-radius: 999px;
            font-weight: 700;
            transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
            border: 0;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.98;
        }

        .btn-primary {
            color: #071b2b;
            background: linear-gradient(135deg, var(--cta), var(--cta-strong));
            box-shadow: var(--shadow);
        }

        .btn-secondary {
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.04);
            color: var(--text);
        }

        .hero {
            padding: 72px 0 40px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.08fr 0.92fr;
            gap: 28px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
            padding: 9px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--line);
            color: var(--warning);
            font-size: 0.92rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        h1, h2, h3 {
            line-height: 1.08;
            margin: 0;
        }

        .hero h1 {
            font-size: clamp(2.6rem, 6vw, 5rem);
            margin-bottom: 18px;
            max-width: 12ch;
        }

        .hero-lead {
            color: var(--muted);
            font-size: 1.14rem;
            max-width: 62ch;
            margin: 0 0 26px;
        }

        .hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-bottom: 26px;
        }

        .trust-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .trust-card,
        .glass-card,
        .benefit-card,
        .process-card,
        .faq-item,
        .about-text,
        .image-card,
        .service-panel,
        .results-strip {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
        }

        .trust-card {
            padding: 16px;
        }

        .trust-card strong {
            display: block;
            font-size: 1.5rem;
            color: var(--warning);
            margin-bottom: 6px;
        }

        .glass-card {
            padding: 28px;
            background: linear-gradient(180deg, rgba(255,255,255,0.1), rgba(255,255,255,0.04));
        }

        .highlight-badge {
            display: inline-block;
            margin-bottom: 12px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(84, 104, 255, 0.18);
            color: #bec8ff;
            font-weight: 700;
        }

        .check-list {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
            display: grid;
            gap: 14px;
        }

        .check-list li {
            padding: 16px 18px;
            border-radius: var(--radius-md);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--line);
        }

        .check-list li::before {
            content: '✔';
            color: var(--cta-strong);
            font-weight: 700;
            margin-right: 10px;
        }

        .section {
            padding: 28px 0 36px;
        }

        .section-head {
            max-width: 760px;
            margin-bottom: 24px;
        }

        .section-kicker {
            display: inline-block;
            margin-bottom: 12px;
            color: var(--accent-soft);
            text-transform: uppercase;
            font-size: 0.88rem;
            letter-spacing: 0.14em;
            font-weight: 700;
        }

        .section-title {
            font-size: clamp(2rem, 5vw, 3.4rem);
            margin-bottom: 14px;
        }

        .section-description {
            margin: 0;
            color: var(--muted);
            font-size: 1.08rem;
        }

        .benefits-grid,
        .process-grid,
        .faq-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .benefit-card,
        .process-card,
        .faq-item {
            padding: 24px;
        }

        .benefit-card h3,
        .process-card h3,
        .faq-item h3 {
            margin-bottom: 10px;
            color: var(--text);
        }

        .service-grid,
        .about-grid,
        .cta-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
            align-items: center;
        }

        .service-panel,
        .about-text,
        .image-card {
            padding: 26px;
        }

        .service-panel .price-callout {
            margin-top: 20px;
            padding: 16px 18px;
            border-radius: var(--radius-md);
            background: rgba(255, 209, 102, 0.1);
            border: 1px solid rgba(255, 209, 102, 0.18);
            color: #ffe4a1;
            font-weight: 700;
        }

        .results-strip {
            padding: 20px 24px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 14px;
        }

        .results-strip strong {
            display: block;
            font-size: 1.5rem;
            color: var(--cta-strong);
        }

        .about-grid {
            align-items: stretch;
        }

        .about-text p,
        .benefit-card p,
        .process-card p,
        .faq-item p,
        .service-panel p,
        .glass-card p,
        .image-note,
        .results-strip p {
            color: var(--muted);
            margin: 0;
        }

        .about-text p + p,
        .service-panel p + p {
            margin-top: 18px;
        }

        .about-signature {
            margin-top: 24px;
            padding-top: 18px;
            border-top: 1px solid var(--line);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #d8deea;
            font-weight: 700;
        }

        .image-card {
            display: grid;
            gap: 18px;
        }

        .image-frame {
            overflow: hidden;
            border-radius: 24px;
            background: linear-gradient(135deg, rgba(84, 104, 255, 0.22), rgba(255, 255, 255, 0.06));
            border: 1px solid var(--line);
            min-height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .image-frame.placeholder::after {
            content: 'Adicione aqui a foto institucional';
            color: var(--muted);
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .logo-frame {
            width: 132px;
            height: 132px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo-frame.placeholder span {
            color: var(--muted);
            text-align: center;
            font-size: 0.9rem;
            padding: 12px;
        }

        .cta-box {
            padding: 32px;
            border-radius: var(--radius-xl);
            background: linear-gradient(135deg, rgba(84, 104, 255, 0.16), rgba(39, 225, 177, 0.14));
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
        }

        .cta-box p {
            color: var(--muted);
            margin: 14px 0 0;
        }

        footer {
            padding: 36px 0 48px;
            text-align: center;
            color: var(--muted);
        }

        @media (max-width: 960px) {
            .hero-grid,
            .service-grid,
            .about-grid,
            .cta-grid,
            .benefits-grid,
            .process-grid,
            .faq-grid,
            .results-strip,
            .trust-row {
                grid-template-columns: 1fr;
            }

            .header-wrap {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-actions {
                width: 100%;
                flex-wrap: wrap;
            }
        }

        @media (max-width: 640px) {
            .hero {
                padding-top: 40px;
            }

            .glass-card,
            .benefit-card,
            .process-card,
            .faq-item,
            .service-panel,
            .about-text,
            .image-card,
            .cta-box {
                padding: 22px;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container header-wrap">
            <div class="brand">
                <div class="brand-mark<?php echo file_exists($logoPath) ? '' : ' placeholder'; ?>">
                    <?php if (file_exists($logoPath)): ?>
                        <img src="<?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="Logo SMART Business">
                    <?php else: ?>
                        <span>Sua logo aqui</span>
                    <?php endif; ?>
                </div>
                <div>
                    SMART Business
                    <small>Solução Empresarial Inteligente</small>
                </div>
            </div>
            <div class="header-actions">
                <a class="btn btn-secondary" href="#sobre">Quem somos</a>
                <a class="btn btn-primary" href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noreferrer">Chamar no WhatsApp</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <span class="eyebrow">Landing page pronta para anúncios e conversão</span>
                    <h1>Declare com segurança em 2026 e mantenha seu CNPJ longe de multas e bloqueios.</h1>
                    <p class="hero-lead">
                        A <strong>SMART Business</strong> ajuda empreendedores a resolverem pendências fiscais,
                        organizarem obrigações e entregarem a <strong>Declaração de Imposto de Renda 2026</strong>
                        com mais clareza, suporte e estratégia.
                    </p>
                    <div class="hero-cta">
                        <a class="btn btn-primary" href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noreferrer">Quero atendimento imediato</a>
                        <a class="btn btn-secondary" href="#servicos">Ver como funciona</a>
                    </div>
                    <div class="trust-row">
                        <div class="trust-card">
                            <strong>IR 2026</strong>
                            Campanha principal destacada já na primeira dobra.
                        </div>
                        <div class="trust-card">
                            <strong>Suporte</strong>
                            Atendimento administrativo e fiscal com linguagem simples.
                        </div>
                        <div class="trust-card">
                            <strong>CNPJ</strong>
                            Solução pensada para empresários e profissionais formalizados.
                        </div>
                    </div>
                </div>

                <aside class="glass-card">
                    <span class="highlight-badge">Atendimento estratégico</span>
                    <h2>O que você resolve com a SMART Business.</h2>
                    <p>
                        Mais do que entregar uma declaração, nossa proposta é orientar, regularizar e estruturar sua
                        rotina fiscal para evitar dor de cabeça agora e no futuro.
                    </p>
                    <ul class="check-list">
                        <?php foreach ($services as $service): ?>
                            <li><?php echo htmlspecialchars($service, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="results-strip">
                    <div>
                        <strong>Mais agilidade</strong>
                        <p>Você sabe exatamente quais documentos reunir e quais passos seguir.</p>
                    </div>
                    <div>
                        <strong>Menos risco</strong>
                        <p>O acompanhamento reduz falhas, pendências e problemas com o fisco.</p>
                    </div>
                    <div>
                        <strong>Mais confiança</strong>
                        <p>Sua empresa ganha suporte para permanecer regular e organizada.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-kicker">Por que contratar</span>
                    <h2 class="section-title">Uma página mais vendedora, construída para converter contatos em atendimento.</h2>
                    <p class="section-description">
                        Estruturamos a comunicação para anúncios e tráfego direto, com foco em urgência, clareza,
                        benefício percebido e CTA forte para WhatsApp.
                    </p>
                </div>
                <div class="benefits-grid">
                    <?php foreach ($benefits as $benefit): ?>
                        <article class="benefit-card">
                            <h3><?php echo htmlspecialchars($benefit['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?php echo htmlspecialchars($benefit['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container service-grid">
                <div class="service-panel">
                    <span class="section-kicker">Declaração 2026</span>
                    <h2>Evite deixar a regularização para a última hora.</h2>
                    <p>
                        Quando a empresa acumula pendências, a declaração se torna mais sensível e o risco de erro cresce.
                        Por isso, a página reforça ação imediata, acompanhamento próximo e organização preventiva.
                    </p>
                    <p>
                        Essa abordagem é ideal para campanhas pagas, tráfego vindo de Instagram, Google ou WhatsApp,
                        porque conduz o visitante rapidamente para uma decisão de contato.
                    </p>
                    <div class="price-callout">
                        Fale agora com a SMART Business pelo WhatsApp e acelere sua organização fiscal para 2026.
                    </div>
                </div>
                <div class="service-panel">
                    <span class="section-kicker">Como funciona</span>
                    <div class="process-grid">
                        <?php foreach ($process as $item): ?>
                            <article class="process-card">
                                <strong><?php echo htmlspecialchars($item['step'], ENT_QUOTES, 'UTF-8'); ?></strong>
                                <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?php echo htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="sobre" class="section">
            <div class="container about-grid">
                <div class="about-text">
                    <span class="section-kicker">Sobre nós</span>
                    <h2 class="section-title">Solução Empresarial Inteligente para quem precisa de orientação clara e ação rápida.</h2>
                    <p>
                        A <strong>Solução Empresarial Inteligente</strong> nasce com o propósito de simplificar a vida de
                        empreendedores que possuem CNPJ e enfrentam dificuldades com obrigações fiscais, declarações e
                        regularizações.
                    </p>
                    <p>
                        Nosso objetivo é oferecer suporte administrativo especializado, orientação clara e acompanhamento
                        estratégico para manter empresas organizadas, regulares e livres de multas ou bloqueios.
                    </p>
                    <div class="about-signature">
                        SMART Business · Administração Empresarial
                    </div>
                </div>
                <div class="image-card">
                    <div class="logo-frame<?php echo file_exists($logoPath) ? '' : ' placeholder'; ?>">
                        <?php if (file_exists($logoPath)): ?>
                            <img src="<?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="Logo SMART Business">
                        <?php else: ?>
                            <span>Adicione a logo em <br><strong><?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?></strong></span>
                        <?php endif; ?>
                    </div>
                    <div class="image-frame<?php echo file_exists($aboutPhotoPath) ? '' : ' placeholder'; ?>">
                        <?php if (file_exists($aboutPhotoPath)): ?>
                            <img src="<?php echo htmlspecialchars($aboutPhotoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="Foto institucional da SMART Business">
                        <?php endif; ?>
                    </div>
                    <p class="image-note">
                        Esta seção já está pronta para receber a sua <strong>logo</strong> e a sua <strong>foto institucional</strong>.
                        Basta enviar os arquivos para os caminhos indicados acima dentro da hospedagem.
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-kicker">Perguntas frequentes</span>
                    <h2 class="section-title">Argumentos rápidos para reduzir objeções e aumentar conversão.</h2>
                    <p class="section-description">
                        Esta parte ajuda o visitante vindo de anúncio a entender o serviço com rapidez e entrar em contato
                        com mais confiança.
                    </p>
                </div>
                <div class="faq-grid">
                    <?php foreach ($faq as $item): ?>
                        <article class="faq-item">
                            <h3><?php echo htmlspecialchars($item['question'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?php echo htmlspecialchars($item['answer'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container cta-grid">
                <div class="cta-box">
                    <span class="section-kicker">Chamada final</span>
                    <h2>Se você quer declarar com segurança em 2026, o melhor momento para agir é agora.</h2>
                    <p>
                        Clique no botão abaixo, fale com a SMART Business no WhatsApp e receba atendimento direcionado
                        para sua necessidade fiscal e administrativa.
                    </p>
                </div>
                <div class="cta-box">
                    <a class="btn btn-primary" href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noreferrer">Falar no WhatsApp: 55 81 98328-0843</a>
                    <p>
                        Link configurado para direcionar diretamente ao número informado: <strong>5581983280843</strong>.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            SMART Business © <?php echo date('Y'); ?> · Suporte administrativo especializado, regularização fiscal e Declaração de Imposto de Renda 2026.
        </div>
    </footer>
</body>
</html>
