<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-generate](./kmc-generate.md) &gt; [KeymanKeyboardGenerator](./kmc-generate.keymankeyboardgenerator.md)

## KeymanKeyboardGenerator class

Generate a Keyman keyboard project. The generator does not read or write from filesystem or network directly, but relies on callbacks for all external IO.

**Signature:**

```typescript
export declare class KeymanKeyboardGenerator extends BasicGenerator implements KeymanCompiler 
```
**Extends:** BasicGenerator

**Implements:** KeymanCompiler

## Properties

|  Property | Modifiers | Type | Description |
|  --- | --- | --- | --- |
|  [SFile\_Keyboard](./kmc-generate.keymankeyboardgenerator.sfile_keyboard.md) | <p><code>static</code></p><p><code>readonly</code></p> | (not declared) |  |
|  [SFile\_KeyboardKMN](./kmc-generate.keymankeyboardgenerator.sfile_keyboardkmn.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_KeyboardKPS](./kmc-generate.keymankeyboardgenerator.sfile_keyboardkps.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_KeyboardKVKS](./kmc-generate.keymankeyboardgenerator.sfile_keyboardkvks.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_Project](./kmc-generate.keymankeyboardgenerator.sfile_project.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_TouchLayout](./kmc-generate.keymankeyboardgenerator.sfile_touchlayout.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |

## Methods

|  Method | Modifiers | Description |
|  --- | --- | --- |
|  [run()](./kmc-generate.keymankeyboardgenerator.run.md) |  | Generate a Keyman Keyboard project. Returns an object containing binary artifacts on success. The files are passed in by name, and the compiler will use callbacks as passed to the [AbstractGenerator.init()](./kmc-generate.abstractgenerator.init.md) function to read any input files by disk. |
