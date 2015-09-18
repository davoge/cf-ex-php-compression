<!DOCTYPE html>
<html>
    <title>Test Compression with the php-buildpack</title>
    <h1>Test Compression with the php-buildpack</h2>
    <h2>Test Instructions</h2>
    <p>
        Push this to cloudfoundry so you can check if enabling compression works.
    </p>
    <p>
        <code>cf push</code>
    </p>
    <p>
        Use cURL to check if it has worked.
    </p>
    <p>
        <code>curl -I -H 'Accept-Encoding: gzip,deflate' https://example.org</code>
    </p>
    <p>
        The server should respond with a <code>Content-Encoding</code> header containing either <code>gzip</code> or <code>deflate</code>
    </p>

    <h2><code>phpinfo()</code> output</h2>
    <?php phpinfo(); ?>
</html>
