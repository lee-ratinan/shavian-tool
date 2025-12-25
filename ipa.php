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
    <link href="http://127.0.0.1:8888/2026/public/assets/img/favicon.png" rel="icon">
    <link href="http://127.0.0.1:8888/2026/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <meta name="theme-color" content="#ffffff">
    <!-- Styles -->
    <link href="https://lee.ratinan.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
