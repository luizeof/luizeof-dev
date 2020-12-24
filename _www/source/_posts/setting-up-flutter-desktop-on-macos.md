---
extends: _layouts.post
section: content
title: "Setting Up Flutter Desktop on MacOS"
date: 2019-12-26
categories: [ flutter ]
lang: "en"
cover_image: "/assets/img/category/flutter-full.webp"
---

Work is underway to extend [Flutter](/categories/flutter/) to support the desktop, allowing developers to build macOS, Windows, and Linux applications with Flutter Desktop.

Flutter 1.3 Alpha currently lets you compile Flutter source code for a native macOS application.

Flutter's desktop support also extends to plugins - you can install existing plugins that support the macOS platform or create your own plugins.

**IMPORTANT**: Flutter desktop APIs are still in the early stages of development and are subject to change without notice. No backward compatibility, API or ABI, will be provided by the development team during the Alpha stage.

Expect any code using these libraries to be updated and recompiled after any Flutter update.

## MacOS apps with Flutter

This is the most advanced desktop platform (for several reasons, including proximity to iOS, which is already supported).

The Objective-C API layer is quite stable at this time, so the latest changes should be rare and you can already test in Flutter SDK 1.3.

## Windows apps with Flutter

The Windows shell is in the early stages. It is based on Win32, but is expected to exploit UWP support in the future.

## Linux apps with Flutter

The current Linux shell is a placeholder for GLFW to allow for early experimentation.

The Flutter Team would like to create a library that lets you embed Flutter, regardless of whether you are using GTK +, Qt, wxWidgets, Motif, or another arbitrary toolkit for other parts of the app, but haven't determined a good way to do it yet. .

The current plan is to provide immediate support for GTK + so that it is easy to add support for other toolkits.

## Flutter Desktop Minimum Requirements

To create a desktop application with Flutter you need the following software:

- Flutter [SDK 1.3 Alpha or higher for MacOS](https://flutter.dev/docs/development/tools/sdk/releases?tab=macos).
- Optional: An IDE that supports Flutter like Android Studio or VS Code.

## Configuring the Flutter SDK

You must be in the master version channel of flutter build and enable the macOS desktop platform feature by typing these commands into Terminal:

```bash
flutter channel master
flutter upgrade
flutter config --enable-macos-desktop
```

## Running the project with Flutter Desktop

To run a Desktop project with Flutter you must pass the -d macOS parameter to the compiler:

```bash
flutter run -d macOS
```

Flutter Desktop mode includes the create and build commands, as well as the run command with debug mode, release mode, profile mode, and hot reload.

In Android Studio you can see MacOS as Device:

![Android Studio](/assets/img/flutter-desktop-android-studio.webp)

## Add desktop to an existing project

To add desktop support to an existing project, run the following command on a terminal in the project root directory:

```bash
flutter create .
```

This will update your project with a new macOS directory and create all the necessary configuration files.

Flutter Desktop Plugin Support

Desktop mode supports the use and creation of plugins. To use a macOS compatible plugin, follow the steps for plugins using packages.

Flutter automatically adds the necessary native code to your project, such as iOS or Android.
