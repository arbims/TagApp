<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <?= link_tag('js/tagsinput/bootstrap-tagsinput.css') ?>

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Brand/logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Tag App</a>
            </div>

            <!-- Collapsible Navbar -->
            <div class="collapse navbar-collapse" id="example-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/posts">Posts<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <main class="main" style="margin-top: 5rem;">
        <div class="container">
            <?= $this->include('elements/flash') ?>
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <?= script_tag('js/tagsinput/bootstrap-tagsinput.js'); ?>
    <?= script_tag('js/typeahead.js'); ?>
    <?= script_tag('js/main.js'); ?>
</body>

</html>