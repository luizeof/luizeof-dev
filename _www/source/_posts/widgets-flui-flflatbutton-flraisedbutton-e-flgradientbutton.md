---
extends: _layouts.post
title: "Widgets FLUI FLFlatButton, FLRaisedButton e FLGradientButton"
section: content
date: 2019-12-08
categories: [ flutter ]
lang: "pt-BR"
cover_image: "/assets/img/category/flutter-full.webp"
---

Os Widgets e botões do FLUI **FLFlatButton** e **FLRaisedButton** incluem alguns widgets baseados no `FlatButton` & `RaisedButton` nativos do Flutter e também adicionaram `FLGradientButton`, que oferece suporte ao fundo gradiente e o `FLLoadingButton`, que suporta animação de carregamento.

> O FLUI é um kit de widgets Open Source para o [Flutter](/categories/flutter/) que possui muitos widgets de interface do usuário de alta qualidade, fornecendo recursos e funções mais avançados para melhorar a eficiência do desenvolvimento.

Os widgets são compatíveis com MaterialApp e não estilizados suportam a personalização de estilos para atender a diferentes necessidades de interface. Você pode acompanhar o desenvolvimento do FLUI no [repositório oficial do Github.](https://github.com/Rannie/flui/)

## Widget FLFlatButton

O `FLFlatButton` é baseado no `FlatButton` nativo do Flutter e possui uma nova propriedade `expanded` e uma propriedade opcional `icon` para especificar onde o ícone está localizado no botão.

Use `FLFlatButton` nas barras de ferramentas, nas caixas de diálogo ou alinhados com outro conteúdo, mas desloque esse conteúdo com preenchimento para que a presença do botão seja óbvia.

Os `FLFlatButton` intencionalmente não possuem bordas visíveis e, portanto, devem confiar em sua posição em relação a outro conteúdo para o contexto.

É interessante usar uma cor de fundo nos `FLFlatButton` usando a propriedade `color` e a cor de texto com a propriedade `textColor`.

Nos diálogos e cartões, eles devem ser agrupados em um dos cantos inferiores. Evite usar `FLFlatButton` onde eles se misturam com outro conteúdo, por exemplo, no meio das listas pois podem atrapalhar a interação do usuário.

## FLFlatButton com a opção _expanded_

```dart
FLFlatButton(
    expanded: true,
    color: Color(0xFF0F4C81),
    textColor: Colors.white,
    child: Text('Botão com Expanded', textAlign: TextAlign.center),
    onPressed: () => print('on click'),
),
```

![Widget FLFlatButton](/assets/img/FLFlatButton-expanded.webp)

## _FLFlatButton_ com a opção de _icon_

```dart
FLFlatButton.icon(
    padding: const EdgeInsets.all(5),
    textColor: Color(0xFF0F4C81),
    onPressed: () => print('on click'),
    icon: Icon(Icons.account_box, color: mainColor),
    label: Text('Botão com Ícone'),
    spacing: 5,
    iconPosition: FLPosition.right,
),
```

![FLFlatButton com a opção de icon](/assets/img/FLFlatButton-icon.webp)

## Widget _FLRaisedButton_

O `FLRaisedButton` é baseado no `RaisedButton`, mas também adiciona `expanded` e `icon`. O uso é o mesmo que `FLFlatButton`.

## Widget _FLGradientButton_

`FLGradientButton` suporta planos de fundo gradientes. Existem três métodos para exibir diferentes tipos de gradientes: _linear_, _sweep_ e _radial_.

## Widget _FLGradientButton.linear_

```dart
FLGradientButton.linear(
    textColor: Colors.white,
    child: Text('Linear Gradient Button'),
    colors: [Colors.lightBlueAccent, Color(0xFF0F4C81)],
    onPressed: () => print('on click'),
),
```

![Widget FLFlatButton FLGradientButton linear](/assets/img/FLGradientButton.linear.webp)

## Widget _FLGradientButton.sweep_

```dart
FLGradientButton.sweep(
    padding: const EdgeInsets.symmetric(horizontal: 10, vertical: 20),
    center: FractionalOffset.center,
    startAngle: 0.0,
    endAngle: math.pi * 2,
    colors: const <Color>[
        Color(0xFF4285F4), // blue
        Color(0xFF34A853), // green
        Color(0xFFFBBC05), // yellow
        Color(0xFFEA4335), // red
        Color(0xFF4285F4), // blue
    ],
    stops: const <double>[0.0, 0.25, 0.5, 0.75, 1.0],
    textColor: Colors.white,
    child: Text('Sweep Gradient Button'),
    onPressed: () => print('on click'),
),
```

![Widget FLFlatButton FLGradientButton sweep](/assets/img/FLGradientButton.sweep_.webp)

## Widget _FLGradientButton.radial_

```dart
FLGradientButton.radial(
    padding: const EdgeInsets.symmetric(horizontal: 10, vertical: 20),
    center: const Alignment(0.7, -0.6),
    radius: 0.2,
    colors: [
        const Color(0xFFFFFF00), // yellow sun
        const Color(0xFF0099FF), // blue sky
    ],
    stops: [0.4, 1.0],
    textColor: Colors.white,
    child: Text('Radial Gradient Button'),
    onPressed: () => print('on click'),
),
```

![Widget FLGradientButton radial](/assets/img/FLGradientButton.radial.webp)

## Widget _FLLoadingButton_

`FLLoadingButton` controla se o indicador deve ser exibido definindo a propriedade `loading`. Ele também fornece propriedades para estilizar o indicador.

```dart
FLLoadingButton(
    child: Text('Login'),
    color: Color(0xFF0F4C81),
    disabledColor: Color(0xFF0F4C81),
    indicatorColor: Colors.white,
    disabledTextColor: Colors.grey.withAlpha(40),
    textColor: Colors.white,
    loading: _loading,
    minWidth: 200,
    onPressed: () {
        setState(() => _loading = true);
        Future.delayed(Duration(seconds: 3), () => setState(() => _loading = false));
    },
),
```

![Widget FLLoadingButton](/assets/img/FLLoadingButton.gif)

## Finalizando

A documentação do FLFlatButton está disponível em [https://www.flui.xin/en/widgets/button.html](https://www.flui.xin/en/widgets/button.html)
