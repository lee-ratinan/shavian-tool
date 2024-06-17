<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <title>Shavian to IPA | Ratinan Lee Official</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Shavian Transcriber">
    <meta name="keywords" content="Shavian Transcriber">
    <meta name="author" content="Ratinan Lee">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://lee.ratinan.com/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://lee.ratinan.com/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://lee.ratinan.com/assets/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="https://lee.ratinan.com/assets/favicon/favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <!-- Styles -->
    <link rel="stylesheet" media="screen" href="https://lee.ratinan.com/assets/vendor/lightgallery/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" media="screen" href="https://lee.ratinan.com/assets/css/theme.min.css">
    <script type="text/javascript" src="https://lee.ratinan.com/assets/vendor/jquery3.6/jquery.min.js"></script>
</head>
<!-- Body -->
<body>
<!-- Main -->
<main id="content">
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <h1>Shavian to IPA</h1>
                <a class="btn btn-outline-success btn-sm" href="index.php">Transcriber</a>
                <a class="btn btn-outline-success btn-sm" href="keyboard.php">Keyboard</a>
                <a class="btn btn-success btn-sm" href="#">Shavian to IPA</a>
                <hr class="my-3">
                <form id="transcriber-form">
                    <div class="mb-3">
                        <label for="text" class="form-label">Input the Shavian message below.</label>
                        <textarea class="form-control" id="text" name="text" rows="5" placeholder="Enter text to convert" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">Convert to IPA</button>
                </form>
                <hr class="my-3">
                <p>Please note: this converter will only convert Shavian alphabets to IPA, and will ignore everything else.</p>
                <table class="table table-sm">
                    <tr>
                        <th>Original Text</th>
                        <th>Converted Text</th>
                    </tr>
                    <tr>
                        <td id="original-message">-</td>
                        <td id="transcribed-message">-</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Error Message:</b><br><span id="error-message">-</span></td>
                    </tr>
                </table>
                <script>
                    $(document).ready(function() {
                        $('#transcriber-form').submit(function(e) {
                            e.preventDefault();
                            let text = $('#text').val();
                            $.ajax({
                                type: 'POST',
                                url: 'ipa-converter.php',
                                data: {text: text},
                                success: function(data) {
                                    $('#original-message').text(data.original_message);
                                    $('#transcribed-message').text(data.converted_message);
                                    $('#error-message').text(data.error);
                                },
                                error: function(data) {
                                    $('#original-message').text('-');
                                    $('#transcribed-message').text('-');
                                    $('#error-message').text('An error occurred. Please try again.');
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</main>
</body>
</html>
