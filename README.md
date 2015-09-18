# Test Compression with the php-buildpack

## Test Instructions

Push this to cloudfoundry so you can check if enabling compression works.

```bash
cf push
```
Use cURL to check if it has worked.

```bash
curl -I -H 'Accept-Encoding: gzip,deflate' https://example.org
```
The server should respond with a `Content-Encoding` header containing either `gzip` or `deflate`.
