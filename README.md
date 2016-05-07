Example PHPBench extension
==========================

Example of a PHPBench extension.

In order to enable this extension with the PHAR version of PHPBench you will
need to configure the path to an (composer) autoloader which can load the
extension and activate the extension:

```javascript
{
    "extension_autoloader": "path/to/autoload.php",
    "extensions": [
        "Acme\\PhpBench\\Extension\\Example\\ExampleExtension"
    ]
}
```

You should now have the `acme:foo` command registered:

```bash
$ phpbench acme:foo
```

and the `foo` progress logger:

```bash
$ phpbench run --progress=foo
```
