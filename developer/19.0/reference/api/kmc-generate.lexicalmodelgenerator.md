<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-generate](./kmc-generate.md) &gt; [LexicalModelGenerator](./kmc-generate.lexicalmodelgenerator.md)

## LexicalModelGenerator class

Generate a Keyman lexical model project. The generator does not read or write from filesystem or network directly, but relies on callbacks for all external IO.

**Signature:**

```typescript
export declare class LexicalModelGenerator extends BasicGenerator implements KeymanCompiler 
```
**Extends:** BasicGenerator

**Implements:** KeymanCompiler

## Properties

|  Property | Modifiers | Type | Description |
|  --- | --- | --- | --- |
|  [SFile\_Model](./kmc-generate.lexicalmodelgenerator.sfile_model.md) | <p><code>static</code></p><p><code>readonly</code></p> | (not declared) |  |
|  [SFile\_ModelTs](./kmc-generate.lexicalmodelgenerator.sfile_modelts.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_Package](./kmc-generate.lexicalmodelgenerator.sfile_package.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_Project](./kmc-generate.lexicalmodelgenerator.sfile_project.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |
|  [SFile\_WordlistTsv](./kmc-generate.lexicalmodelgenerator.sfile_wordlisttsv.md) | <p><code>static</code></p><p><code>readonly</code></p> | string |  |

## Methods

|  Method | Modifiers | Description |
|  --- | --- | --- |
|  [run()](./kmc-generate.lexicalmodelgenerator.run.md) |  | Generate a Lexical Model project. Returns an object containing binary artifacts on success. The files are passed in by name, and the compiler will use callbacks as passed to the [AbstractGenerator.init()](./kmc-generate.abstractgenerator.init.md) function to read any input files by disk. |

