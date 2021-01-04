---
extends: _layouts.post
section: content
title: "How to access API with Basic Authentication in Flutter"
date: 2020-01-02
lang: "en"
excerpt: Implementing dynamic Dark Mode on Flutter using `ThemeMode` and the plugin `provider`.
cover_image: "/assets/img/category/flutter-full.webp"
categories: [flutter]
---

In Flutter development it is critical to access APIs that have some kind of authentication and the most popular method is Basic Authentication, which basically consists of sending the user and password in a header.

In [Flutter](/categories/flutter/) we perform HTTP requests through the native Dart package `http/http.dart` ([https://pub.dev/packages/http](https://pub.dev/packages/http)).

This package contains a set of high-level functions and classes that make it easy to consume HTTP resources. It is platform independent and can be used on the command line and in the browser.

## HTTP request in Flutter

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

## HTTP Request with Basic Authentication in Flutter

Remembering that Basic Authentication requires that _username:password_ to be _Base64_ encoded, which in Flutter is done through the `Base64Encoder` class ([https://api.dartlang.org/stable/2.7.0/dart-convert/Base64Encoder-class.html](https://api.dartlang.org/stable/2.7.0/dart-convert/Base64Encoder-class.html)).

In the context of an HTTP transaction, Basic Authentication is a method for an HTTP user agent (for example, Flutter) to provide a username and password when making a request.

`Base64Encoder` output is sent with the `Authorization: Basic` header:

```
Authorization: Basic QWxhZGRpbjpPcGVuU2VzYW1l
```

Flutter and Dart make it much easier to do this:

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
