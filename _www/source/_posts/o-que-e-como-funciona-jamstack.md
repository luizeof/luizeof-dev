---
extends: _layouts.post-br
section: content
featured: true
lang: "pt-BR"
title: O que é e como funciona o Jamstack
excerpt: Jamstack é uma arquitetura projetada para tornar a web mais rápida, distribuída, segura e fácil de escalar.
cover_image: "/assets/images/jamstack-hero.png"
date: 2020-01-04
categories: [ jamstack ]
image: "/assets/images/jamstack-hero.png"
---

Jamstack é uma arquitetura projetada para tornar a web mais rápida, distribuída, segura e fácil de escalar.

Esta arquitetura se baseia em muitas das ferramentas e fluxos de trabalho que os desenvolvedores adoram e que trazem o máximo de produtividade.

Os princípios básicos de **pré-renderização** e **desacoplamento** permitem que sites e aplicativos sejam entregues com mais confiança e resiliência do que nunca.

## Entendendo a Pré-renderização do Jamstack

Com o Jamstack, todo o front-end é pré-construído em páginas e ativos estáticos altamente otimizados durante um processo de construção. Feito quase impossível na maioria dos CMS que utilizamos hoje em dia como Wordpress, Drupal, etc.

Este processo de pré-renderização resulta em sites que podem ser acessados diretamente de um CDN, reduzindo o custo, a complexidade e o risco de servidores dinâmicos como infraestrutura crítica, problemas com vulnerabilidades e atualizações complexas.

Com Jamstack você escreve seu conteúdo usando Markdown, seus desenvolvedores usam um dos principais frameworks existentes e tudo é compilado na nuvem.

Com tantas ferramentas populares para gerar sites, como **[Gatsby](https://www.gatsbyjs.com/)**, **[Jigsaw](https://jigsaw.tighten.co/)**, **[Gridsome](https://gridsome.org/)**, **[Hugo](https://gohugo.io/)**, **[Jekyll](https://jekyllrb.com/)**, **[Eleventy](https://www.11ty.dev/)**, **[NextJS](https://nextjs.org/)** e muitos outros, muitos desenvolvedores da web já estão familiarizados com as ferramentas necessárias para se tornarem desenvolvedores Jamstack produtivos.


## Como o Jamstack funciona

Ao construir projetos Jamstack, você pode realmente obter o máximo desta técnica se seguir algumas das práticas recomendadas.

Como os projetos Jamstack não dependem de código do lado do servidor, eles podem ser distribuídos em vez de ficarem  em um único servidor. **_Servir diretamente de um CDN desbloqueia velocidades e desempenho que não podem ser batidos._**

Quanto mais do seu website você levar até o limite, melhor será a experiência do usuário.

O Jamstack usa ferramentas de construção modernas e tudo isso vem de fábrica na maioria dos frameworks Jamstack.

Pode ser um pouco complicado para se orientar no começo e é uma área em constante movimento rápido, mas você vai querer ser capaz de usar os padrões da web de amanhã hoje sem esperar pelos navegadores de amanhã. E isso atualmente significa usar Babel, PostCSS, Webpack e outros.

_É importante notar que como o HTML do Jamstack é pré-construído, as alterações de conteúdo não serão publicadas até que você execute outra compilação. _

Automatizar este processo irá lhe poupar muita frustração. Você pode fazer isso sozinho com webhooks ou usar uma plataforma de publicação que inclua o serviço automaticamente. 

Só para citar alguns, o [Github](https://pages.github.com/) possui um ótimo serviço de hospedagem e construção Jamstack e o [Cloudflare está entrando na briga também](https://pages.cloudflare.com/).

À medida que os projetos Jamstack se tornam realmente grandes, novas mudanças podem exigir a compilação de centenas de arquivos. 

Carregar um de cada vez pode causar um estado inconsistente enquanto o processo é concluído.

Porém, você pode evitar isso com um sistema que permite fazer “implantações atômicas”, em que nenhuma alteração será ativada até que todos os arquivos alterados tenham sido carregados. [Estou usando o Firebase Hosting](https://firebase.google.com/products/hosting) e lá é assim, quando faço uma alteração no site .. ele só entra em ação quando tudo que foi alterado foi enviado e consolidado online.


## Jamstack vive no Git e isso é uma maravilha!

Com um projeto Jamstack, qualquer pessoa deve ser capaz de fazer um clone do git, instalar quaisquer dependências necessárias com um procedimento padrão (como npm install) e estar pronto para executar o projeto completo localmente.

Sem bancos de dados para clonar, sem instalações complexas ou dependências impossíveis de lidar.

Isso reduz o atrito do colaborador e também simplifica os fluxos de trabalho de teste e preparação.

A maioria dos provedores disponibilizam um ambiente de teste / staging para que você possa colocar um preview das alterações no ar sem muito esforço. Por exemplo, meu site está em [https://luizeof-dev.web.app](https://luizeof-dev.web.app) para que eu possa ver como ficaram minhas alterações antes de fazer um _"push no master"_.


## Melhorando com JavaScript

Com o HTML e outros ativos de interface do usuário de sites Jamstack servidos diretamente de um CDN, eles podem ser entregues de forma muito rápida e segura.

Com base nisso, os sites Jamstack podem usar JavaScript e APIs para se comunicar com serviços de back-end, permitindo que as experiências sejam aprimoradas e ainda mais personalizadas.


## Supercharging com serviços

As API's, um termo que passou a significar a profundidade e a amplitude das APIs que estão disponíveis para os desenvolvedores usarem no cenário atual, é um facilitador significativo para os sites Jamstack. 

A capacidade de alavancar especialistas de domínio que oferecem seus produtos e serviços por meio de APIs permitiu que as equipes criassem aplicativos muito mais complexos do que se eles próprios assumissem o risco e a carga de tais recursos.

Agora podemos terceirizar coisas como autenticação e identidade, pagamentos, gerenciamento de conteúdo, serviços de dados, pesquisa e muito mais.

Os sites Jamstack podem utilizar esses serviços em tempo de construção e também em tempo de execução diretamente do navegador via JavaScript.

O desacoplamento desses serviços permite maior portabilidade e flexibilidade, bem como risco significativamente reduzido.


## Principais benefícios do Jamstack

Uma arquitetura Jamstack pode trazer todos os tipos de benefícios para os sites e para os fluxos de trabalho do projeto.  

Alguns dos principais benefícios do Jamstack são:


## Segurança e tranquilidade

O JamStack remove várias partes complexas e sistemas da infraestrutura de hospedagem, resultando em menos servidores e sistemas para proteger contra ataques.

Servir páginas e ativos como arquivos pré-gerados permite a hospedagem somente leitura, reduzindo ainda mais os vetores de ataque.

Enquanto isso, ferramentas e serviços dinâmicos podem ser fornecidos por fornecedores com equipes dedicadas a proteger seus sistemas específicos e fornecer altos níveis de serviço, como um CMS Headless por exemplo.


## Escalabilidade fácil com JamStack

Arquiteturas populares lidam com cargas de tráfego pesadas adicionando lógica para armazenar em cache visualizações e recursos populares, como o Redis no Wordpress.

O JamStack fornece isso por padrão. Quando os sites podem ser servidos inteiramente a partir de um CDN, não há lógica ou fluxo de trabalho complexo para determinar quais ativos podem ser armazenados em cache e quando.

Com os sites JamStack, tudo pode ser armazenado em cache em uma rede de distribuição de conteúdo como o Cloudflare.

Com implantações mais simples, redundância integrada e incrível capacidade de carga pois não existem processos rodando em paralelo para as requisições, conexões simultâneas em banco de dados ou deploy de servidores.


## Desempenho de Website usando JamStack

Muitas pessoas me perguntam como o JamStack pode ajudar seu site ou blog e se realmente compensa e a resposta é bem simples: A velocidade de carregamento da página têm um impacto na experiência do usuário e na conversão.

Os sites JamStack eliminam a necessidade de gerar visualizações de página em um servidor no momento da solicitação, ao invés de gerar páginas antecipadamente durante uma construção.

Com todas as páginas já disponíveis em um CDN perto do usuário e prontas para servir, um desempenho muito alto é possível sem a introdução de uma infraestrutura cara ou complexa.

Se você tem uma Landing Page ou um Blog de conteúdo, pode obter uma experiência excelente ao servir um site rápido  para seus usuários, ou milhões deles.


## Capacidade de Manutenção do JamStack

Quando a complexidade da hospedagem é reduzida, o mesmo ocorre com as tarefas de manutenção. 

Um site pré-gerado, sendo servido diretamente de um simples host ou diretamente de um CDN, não precisa de uma equipe de especialistas para manter tudo funcionando.

Esqueça o Docker, Proxies, Redis, servidores distribuídos, Banco de Dados Serverless, Firewall, ACL, etc.

Todo o trabalho pesado que precisava de processamento e memória foi feito durante a construção do website (mais detalhes abaixo), então agora o site gerado é estável e estático, além de poder ser hospedado em serviços que não exigem patch, atualização ou manutenção.

Este meu blog aqui mesmo é hospedado gratuitamente no Firebase Hosting e todo cache de imagens e páginas é feito gratuitamente pelo Cloudflare.

Essa estrutura atende desde 1 até 1 milhão de requisições sem nenhuma alteração ou otimização, sem a necessidade de atualizar plugins e correr o risco de deixar o site fora do ar.


## Portabilidade

Como já disse, os sites Jamstack são pré-gerados.  Isso significa que você pode hospedá-los em uma ampla variedade de serviços de hospedagem e ter maior capacidade de movê-los para o seu host preferido apenas copiando arquivos ou realizando simples deploys em nuvem.

Qualquer solução de hospedagem estática simples deve ser capaz de servir a um site JamStack.

Adeus provisionamento de infraestrutura, servidores, backups, redes, etc.


## Finalizando

Os sites JamStack podem ser construídos com uma ampla variedade de ferramentas.  Eles não dependem de tecnologias proprietárias ou frameworks exóticos e pouco conhecidos.

Em vez disso, eles se baseiam em ferramentas e convenções amplamente disponíveis. 

Como resultado, não é difícil encontrar desenvolvedores entusiasmados e talentosos que tenham as habilidades certas para construir com o Jamstack.

Eficiência e eficácia podem ser favoráveis para sua equipe de desenvolvedores.

Imagine um CMS, cada visita na aplicação ela teria que gerar consultas no banco de dados no back-end, coletar as informações e depois devolver para o usuário. 

Com o JamStack é exibido o HTML gerado, sem a necessidade de renderizar informações de um servidor. 

Com isso o tempo de carregamento é mais rápido e diminui os riscos com segurança.

Em um CMS tradicional, em muitos casos, o código é enviado através de um FTP e as atualizações de conteúdo realizadas com WordPress ou Drupal. 

E aí, que tal começar a pensar em Jamstack para o seu próximo projeto?

Um abraço!
