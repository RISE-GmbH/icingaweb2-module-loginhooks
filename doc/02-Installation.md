# Installation <a id="module-loginhooks-installation"></a>

## Requirements <a id="module-loginhooks-installation-requirements"></a>

* Icinga Web 2 (&gt;= 2.12.2)
* PHP (&gt;= 7.3)

## Installation from .tar.gz <a id="module-loginhooks-installation-manual"></a>

Download the latest version and extract it to a folder named `loginhooks`
in one of your Icinga Web 2 module path directories.

## Enable the newly installed module <a id="module-loginhooks-installation-enable"></a>

Enable the `loginhooks` module either on the CLI by running

```sh
icingacli module enable loginhooks
```

Or go to your Icinga Web 2 frontend, choose `Configuration` -&gt; `Modules`, chose the `loginhooks` module and `enable` it.

It might afterward be necessary to refresh your web browser to be sure that
newly provided styling is loaded.