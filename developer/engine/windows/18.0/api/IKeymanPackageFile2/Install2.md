---
title: IKeymanPackageFile2::Install2 Method
---

## Introduction

The `IKeymanPackageFile2::Install2` method installs the package file
(.kmp) into Keyman Engine for Windows. This includes decompressing the
archive, copying the files contained into the Keyman Engine package
store, adding registry settings, installing fonts, and keyboard layouts,
optionally with input methods for default languages.

Fonts are copied and installed into the Windows Fonts folder, if an
existing font with the same name is not already present.

This method requires elevated privileges.

## Specification

``` clike
void Install(bool Force, bool InstallDefaultLanguage)
```

## Parameters

`Force`
:   If `True`, overwrites an existing package entry.

`InstallDefaultLanguage`
:   If `True`, installs the Windows input method for the default
    language.

## See also

[`IKeymanPackagesInstalled::Install`](../IKeymanPackagesInstalled/Install)
:   Installs a package file and input method for default language

[`IKeymanPackagesInstalled::Install2`](../IKeymanPackagesInstalled2/Install2)
:   Installs a package file, optionally with input method for default
    language

[`IKeymanPackageFile::Install`](../IKeymanPackageFile/Install)
:   Installs a package file and input method for default language