<?php
$social = [
    [
        "icone" => ["src" => "/icones/LinkedinLogo.svg", "alt" => ""],
        "nome" => "Linkedin",
        "src" => ""
    ],
    [
        "icone" => ["src" => "/icones/InstagramLogo.svg", "alt" => ""],
        "nome" => "Instagram",
        "src" => ""
    ],
    [
        "icone" => ["src" => "/icones/GithubLogo.svg", "alt" => ""],
        "nome" => "Github",
        "src" => ""
    ],
    [
        "icone" => ["src" => "/icones/EnvelopeSimple.svg", "alt" => ""],
        "nome" => "E-mail",
        "src" => ""
    ]
];
?>

<section class="h-screen pt-20" style="background: url('/img/Background_Contacts.png') no-repeat center / cover;">
    <div class="text-center mb-10">
        <span class="purple font-inconsolata">Contato</span>
        <h3 class="font-asap text-gray-200 text-2xl">Gostou do meu trabalho?</h3>
        <p class="font-maven text-gray-500">Entre em contato ou acompanhe as minhas redes sociais!</p>
    </div>
    <ul class="flex flex-col justify-between items-center">
        <?php foreach ($social as $item) : ?>
            <a class="hover:opacity-25" href="">
                <li class="w-96 rounded mb-4 flex p-5 justify-between items-center bg-card">
                    <div class="flex gap-2 items-center">
                        <img src="<?= $item['icone']['src'] ?>" alt="<?= $item['icone']['alt'] ?>">
                        <span class="text-gray-200"><?= $item['nome'] ?></span>
                    </div>
                    <div>
                        <img src="/icones/ArrowUpRight.svg" alt="">
                    </div>
                </li>
            </a>
        <?php endforeach; ?>
    </ul>
</section>