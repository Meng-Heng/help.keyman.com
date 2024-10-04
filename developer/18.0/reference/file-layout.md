---
title: Keyman Developer structure for standard keyboard source file folders
---

Keyman Developer generates keyboard project files in a standard layout. [Keyman
Cloud](/developer/keyboards/) uses this file layout. It is highly recommended to
adhere to this file layout.

## About the source files

When you create and build a project, you'll end up with the following structure.
Some files may be not be present, depending on the targets you specify.

```plain
sample
│   HISTORY.md
│   LICENSE.md
│   README.md
│   sample.kpj
│   sample.kpj.user
│
├───build
|       sample.keyboard_info
│       sample.kmp
│       sample.kmx
│       sample.kvk
│       sample.js
│
└───source
        readme.htm
        sample.keyman-touch-layout
        sample.kmn
        sample.kps
        sample.kvks
        welcome.htm
```

Now that probably seems like a whole lot of files! But each file has a purpose.

### Root folder

`sample.kpj`
: The main project file. This contains references to all the components:
  keyboards, models, and packages.

`sample.kpj.user`

: A user preference file. You can safely delete it at any time (you'll lose some
  remembered settings from Keyman Developer, but nothing consequential) and it
  should not be shared in a git repository.

Some of these files are metadata files: information about your keyboard project
that will help you and others maintain your keyboard project in the future.

For example, you may wish to make your keyboard project into a git repository
and push it an online public git host such as GitHub or GitLab.

`README.md`
: Provides an introduction to the keyboard project when others stumble across
  it. This file is in [Markdown](https://commonmark.org) format.

`LICENSE.md`
: Explains the rights that you give to others (by default, it will be the MIT
  license -- which is what we require for Keyman Cloud -- but you can change
  that to any license you wish). This file is in
  [Markdown](https://commonmark.org) format.

`HISTORY.md`
: A place to record changes you make to the project over time. This file is in
[Markdown](https://commonmark.org) format.

* Note: Keyman Developer 16 included a .keyboard_info file in this folder. This
  file is no longer required, as the required metadata can be generated from
  the keyboard source files instead.

### Source folder

The files in the source folder are more fully described in the Keyman Developer
[user guide](../..).

[`source/sample.kmn`](/developer/language)
: Your keyboard source. It will compile to a `.kmx` (desktop targets) or a `.js`
  (web / touch targets).

[`source/sample.kps`](../reference/file-types/kps)
: The package source, which is used to create a compressed `.kmp` archive of the
  files needed for distribution.

`source/readme.htm`
: Introductory web page for end users of your keyboard, shown before they
  install it, so they know what it is used for.

`source/welcome.htm`
: A web page which describes how to use your keyboard, ideally with examples.

[`source/sample.keyman-touch-layout`](../reference/file-types/keyman-touch-layout)
: This touch layout file description is in JSON format and most easily visually
  edited with the Keyman Developer touch layout editor. This file is optional;
  remove the reference from the keyboard source if you don't wish to use it.

[`source/sample.kvks`](../reference/file-types/kvks):
: The on screen keyboard template for desktop platforms. It is in XML format and
  most easily visually edited with the Keyman Developer on screen keyboard
  editor. This file is optional; remove the reference from the keyboard source
  if you don't wish to use it.

### Build folder

All of the files in the build folder are generated by the `kmc` compiler. None
of these files should be included in a git repository.

`build/sample.keyboard_info`
: A [metadata file](/developer/cloud/keyboard_info) detailing the
    keyboard's origin, version, requirements, and capabilities.
  This file is built automatically by the kmc compiler. Please see
  [.keyboard_info specification](/developer/cloud/keyboard_info) for more
  details.

`build/sample.kmp`
: The installable package file -- installable in all Keyman end user products

`build/sample.js`
: The keyboard compiled to Javascript for use with KeymanWeb

`build/sample.kvk`
: The compiled on screen keyboard. This intermediate file should not be
  distributed; it is included in the compiled package.

`build/sample.kmx`
: The compiled keyboard. This intermediate file should not be distributed; it is
  included in the compiled package.