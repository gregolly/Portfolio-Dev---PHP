<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedor PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap');

        body {
            background-color: #16181D;
        }

        .bg-card {
            background-color: #292C34;
        }

        .main-red {
            color: #E3646E;
        }

        .purple {
            color: #BB72E9;
        }

        .font-asap {
            font-family: 'Asap', sans-serif;
        }

        .font-inconsolata {
            font-family: 'Inconsolata', monospace;
        }

        .font-maven {
            font-family: 'Maven Pro', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900">
    <!-- hero -->
    <?php include('./components/hero.php'); ?>
    <!-- projetos -->
    <?php include('./components/projetos.php'); ?>
    <!-- contato -->
    <?php include('./components/contato.php'); ?>
</body>

</html>