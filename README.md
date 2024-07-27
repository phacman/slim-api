# Slim API
Simple REST API based on Slim Skeleton 4.5.0. Built image: `32.8 MB`;

## Under the hood
- Alpine 3.18.4 
- NGINX
- PHP-FPM
- PHP 8.2 
- Slim Skeleton 4.5.0

## Install
Just run this command to start
```shell
make d-up
```

## Endpoints
Execute http-file from `http` directory
- **index.http:** GET: `/`
- **get.http:** GET: `/get`
- **post.http:** POST: `/post`
- **php.http:** GET: 
  - php: version, extensions: `/php`
  - phpinfo(): `/php/info`

## Analogs
- PHP Native: [micro-start-php](https://github.com/phacman/micro-start-php)
- Golang Native: [micro-start-go](https://github.com/phacman/micro-start-go)
- Node.js Vanilla: [micro-start-node](https://github.com/phacman/micro-start-node)
- Python Native: [micro-start-python](https://github.com/phacman/micro-start-python)
