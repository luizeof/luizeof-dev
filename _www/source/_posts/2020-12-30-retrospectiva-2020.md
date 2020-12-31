---
extends: _layouts.post-br
section: content
title: "Retrospectiva do ano de 2020"
excerpt: Uma visão geral de como foi o conturbado ano de 2020.
date: 2020-12-30
categories: [ pessoal ]
---

Que ano difícil, arrastado e ainda assim incrível.

Apensar de todo o transtorno da pandemia, foi o ano mais produtivo que me lembro. Aproveitei para colocar as coisas em dia na vida financeira, pessoal e profissional.

Vou falar aqui neste artigo sobre o lado profissional. Bora lá ?


## Coloquei o Todoist em dia


O Todoist não me deixava em paz. Todo dia eu recebia aquele e-mail falando que tenho "XX tarefas pendentes". Isso me deixava frustrado, mas também me fazia não perder o foco do que tinha que ser feito em algum momento.

Agora na pandemia tive tempo de ler novamente o "Getting Things Done" e isso mudou muito como encaro a gestão de tarefas do dia a dia.

Só o fato de colocar na lista de tarefas todas as coisas que eu queria fazer foi o maior impulso para realmente realizar essas tarefas. Tudo que está aqui neste artigo foi lançado no Todoist e me serviu de guia durante a pandemia.

Se você está procrastinando, tem noção disso e quer mudar esse comportamento, recomendo o livro "Getting Things Done" e o app Todoist.

## Aprendi editar Podcasts com o ReaperFM

Antes mesmo da Pandemia comecei a editar áudio com um foco mais "profissional". Sempre gostei de podcasts, montei minhas pautas com cuidado mas nunca fui muito feliz com o resultado final do áudio.

Foi aí que conheci o [Reaper FM](https://www.reaper.fm/). Um software fantástico para edição que me possibilitou avançar muito na edição de masterização de podcasts.

O Reaper é fantástico para remover ruídos, trabalhar com trilhas, aplicar efeitos para melhorar a voz, música de fundo, etc. Enfim, comecei o ano bem animado ;)

Fiz até alguns vídeos sobre edição de audio no meu canal paralelo no Youtube chamado [Podcast Studio](https://www.youtube.com/channel/UC_iGAQx8zHqWBqMfejoDpPw). Assiste lá ;)

## Conheci o Flutter

No final de Dezembro de 2019, nos últimos dias do ano conheci o Flutter e em janeiro dediquei muitas horas para entender como ele funciona. Fiz alguns projetos simples e até mesmo um App para Podcast.

Acredito que em 2021 devo lançar o app da Powertic e do EmailFirst em Flutter.

### Packages no pub.dev

Tenho 2 publishers no pub.dev, o site oficial de pacotes e bibliotecas para Dart / Flutter.

No meu publisher pessoal [pub.dev/publishers/luizeof.dev](https://pub.dev/publishers/luizeof.dev/packages):


- [picpay](https://pub.dev/packages/picpay)

- [podcast_feed_eof](https://pub.dev/packages/eof_podcast_feed)

E no publisher da Powertic [pub.dev/publishers/powertic.com](https://pub.dev/publishers/powertic.com/packages):

- [mautic_api](https://pub.dev/packages/mautic_api)

- [mautic_tracking_api](https://pub.dev/packages/mautic_tracking_api)


## Enfim, mergulhei no Laravel

Antes tarde do que nunca. Sempre gostei de usar Ruby on Rails e tenho uma resistência grande ao PHP, ainda tenho na verdade, mas consigo superar com facilidade.

O Laravel veio em boa hora, lá pra Agosto quando eu tive a necessidade de reescrever o painel da Powertic do Ruby on Rails para PHP.

Assisti tudo do LaraCasts além de intermináveis vídeos no Youtube e consegui subir a versão beta do Painel da Powertic e o beta do EmailFirst. Tenho muito trabalho em Laravel agora em Janeiro e Fevereiro.

É realmente incrível como o Laravel pode acelerar o desenvolvimento Web tanto no Backend, quanto no FrontEnd.

A idéia é que agora em 2021 eu escreva sobre Laravel e Tailwind aqui no Blog ;)


## Mudanças no Docker Mautic da Powertic

Outro ponto que tive muito tempo para fazer foi ajustar a imagem do Docker da Powertic. No começo do ano começamos usar Swarm em servidores dedicados para os Mautics e foi necessário otimizar (e muito) o nosso Docker privado. Ficou 10 e já tenho até a versão para o Mautic 3.

## Participei do MauticCon 2020

Desde o ano passado que o MauticCon estava no radar e neste ano ele saiu do papel. Consegui uma apresentação sobre Mautic para Grandes Bases de Contatos e foi muito legal.s

## Elementor Meetup São Paulo

A turma do Elementor também me concedeu acesso ao Elementor Meetup São Paulo, que é um encontro Bimestral com a comunidade Elementor aqui no Brasil. Fiquei muito feliz em participar dessa empreitada.


## Atualizei meu Stack

Aproveitei também para conhecer novas ferramentas e aprimorar ferramentas que conhecia "por cima". 

#### Docker Swarm

No começo do ano atualizamos o Docker da Powertic e de quebra migramos para Swarm. Agora nossos Mautics são prontos para escalar e já são pré-otimizados para cargas grandes de trabalho.

Quando comecei com o Laravel, aproveitei também para aprender mais sobre como escalar uma aplicação Laravel usando Swarm e Traefik, e hoje nossa infra dos 2 sistemas rodam muito bem e aguentam uma carga enorme.


#### Traefik 2+

Estava usando o Traefik 1.7 e desde que saiu o Traefik 2.0 ficou pendente aprofundar nas mudanças (e mudou muito). Hoje os nossos novos Mautic e também o nosso sistema já roda com o Traefik 2 e são monitorados pelo Traefik Pilot.

O Traefik 2+ realmente é uma ferramenta essencial no Stack de qualquer desenvolvedor hoje em dia.

#### Agora só uso o VSCode

Outro ponto foi que deixei de usar o Atom e migrei para o VSCode. Já que o Laravel tem diversas extensões para o VSCode, aproveitei e fiz essa migração.

É diferente, me parece mais "pesadão", mas estou gostando de usar.

Vou escrever algumas dicas de extensões aqui no blog também.


#### VSCode na Nuvem

O ponto que mais gostei do VSCode é que rodo todo o meu ambiente de Dev e Staging na nuvem. Tenho o PHP instalado no meu notebook mas apenas para compliar o JamStack do JigSaw que eu uso aqui no Blog.

Todo o meu ambiente de dev roda na nuvem. É uma maravilha ter essa liberdade.

Acredito que eu lance um curso no Udemy sobre como ter um ambiente de desenvolvimento Laravel na Nuvem usando uma VPS simples de $10.


#### Tailwind CSS

Uso o Bootstrap desde a versão 1 e com o Laravel 8 comecei a conhecer mais o Tailwind. Acredito que o Bootstrap tenha chegado ao final da linha para meu Stack.

Apesar do Painel da Powertic ter sido feito em Bootstrap 5, as facilidades do Tailwind realmente colocam o Boostrap fora da minha lista.


#### Livewire

Pensei em aprender Vue umas 3 vezes nesse ano, mas depois que conheci o Livewire e consegui colocar ele no meu Workflow, posso dizer que nem penso mais em Vue ou qualquer outro "javascript".

Livewire dá uma nova roupagem na interação com a web e realmente é um dos projetos que mais me chama a atenção no mundo Laravel.


## Comecei usar JAMStack com Jigsaw


Comecei este blog usando JamStack com [Jigsaw](https://jigsaw.tighten.co/), que é um framework baseado no Blade no Laravel, com suporte ao WebPack, Tailwind, PostCSS e mais.

Gostei muito de escrever em Markdown e hospedo este blog gratuitamente no Google Firebase Host. Além de ter controle total sobre o código, consigo uma nota Excelente no GTMetrix e no PageSpeed Insights.


## Comecei um novo Painel para a Powertic

E no segundo semstre de 2020 comecei firme a migração do painel da Powertic do Ruby on Rails para o PHP em Laravel. Acredito que em janeiro já possa liberar para uso dos clientes.


## Começamos um novo sistema para E-mail 

E nesse pocesso de desenvolvimento começamos também um novo sistema chamado EmailFirst, que vai ajudar muito quem trabalha com e-mail marketing e quer uma ferramenta que monitore e cuide dos pequenos detalhes.

## Finalizando

Foi um ano corrido. Essas são somente as conquistas profissionais, mas ainda tenho muitas outras coisas boas que tirei da pandemia neste ano e que fizeram com que o ano valesse a pena.

Um abraço e Feliz 2021!
