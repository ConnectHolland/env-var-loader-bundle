# ConnectHolland EnvVarLoaderBundle

A symfony 5 bundle with various environment variable loaders

## Install

```bash
composer require connectholland/env-var-loader-bundle
```

## Configure

An example configuration is installed by symfony recipes in config/packages/env_var_loader.yaml.

Enable the loaders you need, by default all loaders are disabled.

```yaml
env_var_loader:
  loaders:
    etcd:
      enabled: true
    vault:
      enabled: false
```
