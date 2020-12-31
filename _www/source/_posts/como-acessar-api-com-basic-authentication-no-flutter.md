---
extends: _layouts.post-br
section: content
title: "Como acessar API com Basic Authentication no Flutter"
description: No desenvolvimento com Flutter é fundamental acessar API que possuem algum tipo de autenticação e o método mais popular é o Basic Authentication.
cover_image: "/assets/img/category/flutter-full.webp"
date: 2020-01-02
categories: [ flutter, flutter-br ]
image: "assets/images/category/flutter-full.webp"
---

No desenvolvimento com Flutter é fundamental acessar API que possuem algum tipo de autenticação e o método mais popular é o _Basic Authentication_, que consiste basicamente no envio do usuário e senha em um cabeçalho.

No [Flutter](https://luizeof.dev/blog/flutter-br) realizamos requisições HTTP através do pacote nativo do Dart `http/http.dart` ([https://pub.dev/packages/http)](https://pub.dev/packages/http).

Este pacote contém um conjunto de funções e classes de alto nível que facilitam o consumo de recursos HTTP. É independente da plataforma e pode ser usado na linha de comando e no navegador.

## Requisição HTTP no Flutter

```dart
import 'package:http/http.dart' as http;

main() async {

  var response = await http.post(
      'https://api.site.io/new',
      body: {'name': 'doodle', 'color': 'blue'},
  );

  print('Response status: ${response.statusCode}');
  print('Response body: ${response.body}');

}
```

## Requisição HTTP com Basic Authentication no Flutter

Lembrando que o Basic Authentication exige que o par **_usuário:senha_** seja codificado como _Base64_, que no Flutter é feito através da classe `Base64Encoder` ([https://api.dartlang.org/stable/2.7.0/dart-convert/Base64Encoder-class.html](https://api.dartlang.org/stable/2.7.0/dart-convert/Base64Encoder-class.html)).

No contexto de uma transação HTTP, a Basic Authentication é um método para um agente de usuário HTTP (por exemplo, o Flutter) fornecer um nome de usuário e senha ao fazer uma solicitação.

Na autenticação HTTP básica, uma solicitação contém um campo de cabeçalho na forma de `Authorization: Basic user:senha`, onde as credenciais devem obrigatoriamente serem codificadas como _base64_ e o usuário e a senha são unidos por dois pontos `:`.

O resultado do `Base64Encoder` é enviado com o cabeçalho `Authorization: Basic`:

```text
Authorization: Basic QWxhZGRpbjpPcGVuU2VzYW1l
```

O Flutter e o Dart facilitam bastante a realização desse procedimento:

```dart
import 'dart:convert';
import 'package:http/http.dart';

main() async {

  String username = 'luiz';
  String password = '123';
  String basicAuth = 'Basic ' + base64Encode('$username:$password');

  var response = await http.post(
      'https://api.site.io/new',
      headers: <String, String>{'authorization': basicAuth},
      body: {'name': 'doodle', 'color': 'blue'},
  );

  print('Response status: ${response.statusCode}');
  print('Response body: ${response.body}');

}
```

Um grande abraço!
