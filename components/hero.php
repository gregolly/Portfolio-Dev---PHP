<?php
$stacks = ["Github", "PHP", "CSS", "HTML", "Javascript"];
?>
<div class="h-screen flex justify-center items-center" style="background: url('/img/Background_Intro.png') no-repeat center / cover;">
    <header class="text-center flex items-center flex-col">
        <img class="border border-red-400 rounded-full p-1" src="/img/Image.png" alt="">
        <p class="text-gray-200 font-inconsolata mt-10">Hello World! Meu nome é <span class="main-red">Martina Santos</span> e sou</p>
        <h1 class="text-[56px] text-gray-200 font-bold font-asap mt-1 mb-4">Desenvolvedora PHP</h1>
        <p class="text-gray-500 max-w-3xl">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo
            sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
        <ul class="flex gap-3 mt-20">
            <?php
            $colors = ['lime', 'fuchsia', 'sky', 'rose', 'amber'];
            foreach ($stacks as $index => $stack) : ?>
                <li class="bg-<?= $colors[$index]; ?>-400 rounded-full px-4 py-1 font-inconsolata font-bold"><?= $stack; ?></li>
            <?php endforeach; ?>
        </ul>
    </header>
</div>