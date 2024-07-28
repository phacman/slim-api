# Slim API
Simple REST API based on Slim Skeleton 4.5.0. 

Built image: `46.2MB`;

## Under the hood
- Vanilla Alpine 3.18.4 
- NGINX
- PHP-FPM
- PHP 8.2.16 
- Slim Skeleton 4.5.0

### PHP extension
- cgi-fcgi, Core, date, filter, hash, intl, json, ldap, 
- libxml, mbstring, pcre, random, readline, Reflection, 
- session, sodium, SPL, standard, xml, zlib

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
- **users.http:** GET: 
  - persons list: `/users`
  - one person: `/users/1`

## Analogs
- PHP Native: [micro-start-php](https://github.com/phacman/micro-start-php)
- Golang Native: [micro-start-go](https://github.com/phacman/micro-start-go)
- Node.js Vanilla: [micro-start-node](https://github.com/phacman/micro-start-node)
- Python Native: [micro-start-python](https://github.com/phacman/micro-start-python)
