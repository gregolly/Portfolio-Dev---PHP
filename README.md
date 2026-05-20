# 💼 Portfólio — Martina Santos

Site de portfólio pessoal desenvolvido com PHP, Tailwind CSS e fontes do Google Fonts. Apresenta uma seção de introdução, projetos em destaque e informações de contato.

## 📸 Visão Geral

O projeto é composto por três seções principais:

- **Hero** — Apresentação pessoal com foto, nome, bio e stack de tecnologias
- **Projetos** — Grade de projetos em destaque com imagem, título, descrição e tecnologias usadas
- **Contato** — Links para redes sociais (LinkedIn, Instagram, GitHub e E-mail)

## 🛠️ Tecnologias

- **PHP** — Renderização server-side e componentização via `include`
- **HTML5**
- **Tailwind CSS v4** (via CDN browser build)
- **Google Fonts** — Asap, Inconsolata, Maven Pro
- **SVG** — Ícones das redes sociais

## 📁 Estrutura do Projeto

```
projeto-pratico-1/
├── index.php                   # Arquivo principal (entry point)
├── components/
│   ├── hero.php                # Seção de apresentação
│   ├── projetos.php            # Grade de projetos
│   └── contato.php             # Seção de contato / redes sociais
├── icones/
│   ├── ArrowUpRight.svg
│   ├── EnvelopeSimple.svg
│   ├── GithubLogo.svg
│   ├── InstagramLogo.svg
│   └── LinkedinLogo.svg
└── img/
    ├── Background_Intro.png
    ├── Background_Contacts.png
    ├── Image.png               # Foto de perfil
    ├── image_1.png             # Thumbnail: Travelgram
    ├── image_2.png             # Thumbnail: Página de Receita
    ├── image_3.png             # Thumbnail: Tech News
    ├── image_4.png             # Thumbnail: Refund
    ├── image_5.png             # Thumbnail: Página de Turismo
    └── image_6.png             # Thumbnail: Zingen
```

## 🚀 Como Rodar Localmente

### Pré-requisitos

- PHP 7.4 ou superior instalado na máquina

### Passos

1. Clone o repositório:
   ```bash
   git clone <url-do-repositorio>
   cd projeto-pratico-1
   ```

2. Inicie o servidor embutido do PHP a partir da raiz do projeto:
   ```bash
   php -S localhost:8000
   ```

3. Abra o navegador em `http://localhost:8000`

> **Atenção:** As imagens e ícones usam caminhos absolutos (ex: `/img/Image.png`), por isso é necessário servir o projeto a partir da raiz — não basta abrir o `index.php` diretamente pelo navegador.

## 📂 Projetos em Destaque

| Projeto | Descrição |
|---|---|
| Travelgram | Rede social de registros de viagens |
| Página de Receita | Passo a passo de receita para cupcakes |
| Tech News | Homepage de portal de notícias de tecnologia |
| Refund | Sistema de pedido e acompanhamento de reembolso |
| Página de Turismo | Informações turísticas sobre Busan |
| Zingen | Landing page de aplicativo de Karaokê |

## ✏️ Personalização

Para adaptar o portfólio, edite os arquivos em `components/`:

- **`hero.php`** — Atualize nome, bio e lista de stacks no array `$stacks`
- **`projetos.php`** — Adicione ou remova projetos no array `$projetos`
- **`contato.php`** — Preencha os atributos `src` no array `$social` com os links das suas redes

## 📄 Licença

Este projeto foi desenvolvido para fins de estudo e prática. Sinta-se livre para usá-lo como base para o seu próprio portfólio.
