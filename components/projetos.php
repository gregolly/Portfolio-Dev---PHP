<?php
$projetos = [
    [
        "img" => ["src" => "/img/image_1.png", "alt" => ""],
        "titulo" => "Travelgram",
        "descricao" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
        "stacks" => ["Github", "PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "img" => ["src" => "/img/image_2.png", "alt" => ""],
        "titulo" => "Página de receita",
        "descricao" => "Página com o passo a passo de uma receita para cupcakes",
        "stacks" => ["Github", "PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "img" => ["src" => "/img/image_3.png", "alt" => ""],
        "titulo" => "Tech News",
        "descricao" => "Homepage de um portal de notícias sobre a área de tecnologia",
        "stacks" => ["Github", "PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "img" => ["src" => "/img/image_4.png", "alt" => ""],
        "titulo" => "Refund",
        "descricao" => "Um sistema para pedido e acompanhamento de reembolso",
        "stacks" => ["Github", "PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "img" => ["src" => "/img/image_5.png", "alt" => ""],
        "titulo" => "Página de turismo",
        "descricao" => "Página com as principais informações para quem quer viajar para Busan",
        "stacks" => ["Github", "PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "img" => ["src" => "/img/image_6.png", "alt" => ""],
        "titulo" => "Zingen",
        "descricao" => "Landing Page completa e responsiva de um aplicativo de Karaokê",
        "stacks" => ["Github", "PHP", "CSS", "HTML", "Javascript"]
    ]
];
?>

<main class="mb-40">
    <div class="text-center">
        <span class="main-red font-inconsolata">Meu trabalho</span>
        <h3 class="font-asap font-medium text-gray-200 text-2xl mt-2">Veja os projetos em destaque</h3>
    </div>
    <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-20">
        <?php foreach ($projetos as $projeto) : ?>
            <div class="flex flex-col sm:flex-row bg-card rounded gap-5 p-4">
                <div class="w-full sm:w-1/3">
                    <img class="w-full rounded" src="<?= $projeto['img']['src']; ?>" alt="<?= $projeto['img']['alt']; ?>">
                </div>
                <div class="w-full sm:w-2/3">
                    <h4 class="text-gray-200 font-asap"><?= $projeto['titulo']; ?></h4>
                    <p class="text-gray-400 font-maven"><?= $projeto['descricao']; ?></p>
                    <ul class="flex flex-wrap gap-2 mt-10">
                        <?php
                        $colors = ['lime', 'fuchsia', 'sky', 'rose', 'amber'];
                        foreach ($projeto['stacks'] as $index => $stack) :
                        ?>
                            <li class="bg-<?= $colors[$index]; ?>-400 text-sm rounded-full px-4 py-1 font-inconsolata font-bold"><?= $stack; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>