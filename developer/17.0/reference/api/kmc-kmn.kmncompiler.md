<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-kmn](./kmc-kmn.md) &gt; [KmnCompiler](./kmc-kmn.kmncompiler.md)

## KmnCompiler class

Compiles a .kmn file to a .kmx, .kvk, and/or .js. The compiler does not read or write from filesystem or network directly, but relies on callbacks for all external IO.

**Signature:**

```typescript
export declare class KmnCompiler implements KeymanCompiler, UnicodeSetParser 
```
**Implements:** KeymanCompiler, UnicodeSetParser

## Constructors

|  Constructor | Modifiers | Description |
|  --- | --- | --- |
|  [(constructor)()](./kmc-kmn.kmncompiler._constructor_.md) |  | Constructs a new instance of the <code>KmnCompiler</code> class |

## Methods

|  Method | Modifiers | Description |
|  --- | --- | --- |
|  [init(callbacks, options)](./kmc-kmn.kmncompiler.init.md) |  | Initialize the compiler, including loading the WASM host for kmcmplib. Copies options. |
|  [run(infile, outfile)](./kmc-kmn.kmncompiler.run.md) |  | Compiles a .kmn file to .kmx, .kvk, and/or .js files. Returns an object containing binary artifacts on succes. The files are passed in by name, and the compiler will use callbacks as passed to the [KmnCompiler.init()](./kmc-kmn.kmncompiler.init.md) function to read any input files by disk. |
|  [verifyInitialized()](./kmc-kmn.kmncompiler.verifyinitialized.md) |  | Verify that wasm is spun up OK. |
|  [write(artifacts)](./kmc-kmn.kmncompiler.write.md) |  | <p>Write artifacts from a successful compile to disk, via callbacks methods. The artifacts written may include:</p><p>- .kmx file - binary keyboard used by Keyman on desktop platforms - .kvk file - binary on screen keyboard used by Keyman on desktop platforms - .js file - Javascript keyboard for web and touch platforms</p> |
