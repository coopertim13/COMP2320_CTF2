<html>
<head>
    <title>Health Checker v1.0</title>
    <link rel="icon" type="image/png" href="/static/favicon.png">
    <link rel="stylesheet" type="text/css" href="/static/css/prism.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <a class="navbar-brand mb-0 h1" href="/">👨‍⚕️ health check</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <span class="text-white">IP: <?= $_SERVER['REMOTE_ADDR'] ?> </span>
    </nav>
    <div class="container" style="max-width:1430px !important;">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <h3>A cURL-based post-deploy health check with build-in redirect. A quick & easy way to verify a deployment.</h3>
                </div>
                <br>
                <form id='form' method="POST">
                    <div class="input-group">
                        <select class="form-control" name="test">
                            <option value="ping">Curl</option>
                        </select>
                        <select class="form-control">
                            <option selected>Server 01</option>
                        </select>
                        <input type="text" id="host" name="host" class="form-control" value="http://localhost/" placeholder="http://localhost/" autocomplete="off">
                        <div class="input-group-append">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                    <br>
                    <div id='healthcheck'></div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script src="/static/js/prism.js"></script>
<script src="/static/js/main.js"></script>
</html>