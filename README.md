## About HBL Payment Gateway

The HBL Payment Gateway provides a secure and efficient way to process payments online. It supports the latest encryption standards and is designed to integrate seamlessly with your existing systems. Key features include:

- Secure transaction processing with JOSE encryption/decryption.
- Easy integration with PHP 8.1 and above.
- Comprehensive support for UAT and live environments.

## Getting Started

To get started with the HBL Payment Gateway, follow these steps:

1. Run the sample code in PHP 8.1 to understand the flow.
2. Deploy and use the third-party JOSE encryption/decryption as per your PHP version.
3. Integrate into the live environment after completing UAT integration.

## Testing Credentials

Use the following credentials for testing:

- **Merchant ID/Office ID**: 9104137120
- **API Key**: "65805a1636c74b8e8ac81a991da80be4"

### Test Cards

- **Card Name**: ALOK CHAUDHARY
- **Card Number**: 5399 3300 0001 2640
- **Expiry Date**: 04/2027
- **CVV**: 734
- **Card Number**: 4101 4900 0005 7763
- **Expiry Date**: 09/27
- **CVV**: 344

## Production Setup

For production, follow these steps:

- Generate merchant keys as per the [documentation](https://uat-paco.s3.ap-southeast-1.amazonaws.com/HTML-based-docs/CorePaymentAPI/2022-04-25-Et01x9/index.html#trueusing-jose-for-message-encryption-and-signing-with-2c2p-paco-api-integration).
- Provide public signing and encryption keys to HBL.
- Use the PACO public key for production from [here](https://uat-paco.s3.ap-southeast-1.amazonaws.com/HTML-based-docs/CorePaymentAPI/2022-04-25-Et01x9/Keys/2C2P-JOSE-Key-PRD.zip) (password: %p%6Zt773/RpBP8E).
- **Encryption Key ID (KID)**: 19f84b5655f04e25a99b09f1ee2fac78
- **Production Endpoint**: https://core.paco.2c2p.com

## Key Generation

For key generation, use the [RSA Encryption/Decryption Tool](https://www.devglan.com/online-tools/rsa-encryption-decryption).

## Development Requirements

To set up the development environment, ensure you have the following packages:

- **web-token/jwt-framework**: ^2.2
- **guzzlehttp/guzzle**: ^7.0
- **nesbot/carbon**: ^2.56
- **ext-openssl**: *

### Required PHP Modules

Make sure the following PHP modules are enabled in your environment:

<details>
<summary>Click to expand the list of required PHP modules</summary>

<pre>
[PHP Modules]
bcmath
calendar
Core
ctype
curl
date
dom
exif
FFI
fileinfo
filter
ftp
gd
gettext
gmp
hash
iconv
imagick
imap
intl
json
libxml
mbstring
mysqli
mysqlnd
openssl
pcntl
pcre
PDO
pdo_mysql
Phar
posix
random
readline
Reflection
session
shmop
SimpleXML
soap
sockets
sodium
SPL
standard
sysvmsg
sysvsem
sysvshm
tokenizer
xml
xmlreader
xmlrpc
xmlwriter
xsl
Zend OPcache
zip
zlib

[Zend Modules]
Zend OPcache
</pre>
</details>

## License

The HBL Payment Gateway is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
