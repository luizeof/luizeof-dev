---
extends: _layouts.post
title: "How to convert data in Flutter and Dart"
section: content
date: 2019-12-05
categories: [ flutter ]
lang: "en"
cover_image: "/assets/img/category/flutter-full.webp"
---

During development it is common to convert data from one type to another to perform the most diverse operations and Dart offers a number of methods to perform the conversions within [Flutter](/categories/flutter/).

## Convert String to Int

```dart
var strtoint = int.parse("999");
```

The `int.parse` method parses the source as an `integer` literal and returns the value.

The source must be a non-empty sequence of base base digits, optionally prefixed with a minus or plus sign (‘-‘ or ‘+’). Must not be null.

If the source `String` does not contain a valid `integer` literal, optionally prefixed by a sign, a `FormatException` is thrown.

## Convert String to double

```dart
var strtodouble = double.parse('1.1');
```

The `double.parse()` method accepts an optional sign (+ or -) followed by the characters "`Infinity`", "`NaN`" or a floating point representation.

A floating point representation is composed of a mantissa and an optional part of the exponent.

The mantissa is a decimal point (.) Followed by a sequence of digits (decimals) or a sequence of digits optionally followed by a decimal point and optionally more digits.

The exponent (optional) part consists of the character “e” or “E“, an optional sign and one or more digits. `String` must not be `null`. Leading and trailing whitespaces are ignored.

If the source `String` is not a valid double literal, then `onError` is called with the source as an argument and its return value will be used. If no `onError` is provided, a `FormatException` is thrown.

## Convert int to String

Dart offers a special method called `toString()` to convert `integer` to `String`.

```dart
String inttostr = 1.toString ();
```

i`nt.toString()` returns the representation of an `integer` numeric literal.

## Convert double to String

Dart offers a special method called `toString()` to convert `double` numbers to `String`.

```dart
String doubletostr = 1.9.toString();
```

`double.toString()` returns the representation of a numeric literal, so that the `double` value closest to the mathematical value of the representation is this `double`.
