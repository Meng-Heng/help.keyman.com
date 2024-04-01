<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-package](./kmc-package.md) &gt; [WindowsPackageInstallerCompiler](./kmc-package.windowspackageinstallercompiler.md) &gt; [init](./kmc-package.windowspackageinstallercompiler.init.md)

## WindowsPackageInstallerCompiler.init() method

Initialize the compiler. Copies options.

**Signature:**

```typescript
init(callbacks: CompilerCallbacks, options: WindowsPackageInstallerCompilerOptions): Promise<boolean>;
```

## Parameters

|  Parameter | Type | Description |
|  --- | --- | --- |
|  callbacks | CompilerCallbacks | Callbacks for external interfaces, including message reporting and file io |
|  options | [WindowsPackageInstallerCompilerOptions](./kmc-package.windowspackageinstallercompileroptions.md) | Compiler options |

**Returns:**

Promise&lt;boolean&gt;

false if initialization fails
