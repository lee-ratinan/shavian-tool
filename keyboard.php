<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <title>Shavian Keyboard | Ratinan Lee Official</title>
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
                <h1>Shavian Keyboard</h1>
                <a class="btn btn-outline-success btn-sm" href="index.php">Transcriber</a>
                <a class="btn btn-success btn-sm" href="#">Keyboard</a>
                <hr class="my-3">
                <form id="keyboard-form">
                    <div class="mb-3">
                        <label for="shavian" class="form-label">Output (Shavian):</label>
                        <textarea class="form-control" id="shavian" name="shavian" rows="2" placeholder="Your Shavian message" readonly></textarea>
                        <label for="ipa" class="form-label">Output (IPA):</label>
                        <textarea class="form-control" id="ipa" name="ipa" rows="2" placeholder="Your Latin message" readonly></textarea>
                    </div>
                </form>
                <div class="row">
                    <?php
                    function print_key($letter, $sound, $name) {
                        echo '<div class="col mb-3 d-grid">';
                        echo '<button class="btn btn-success btn-sm shavian-key" data-character="'.$letter.'" data-sound="'.$sound.'">';
                        echo $letter . '<br>/' . $sound . '/<br>' . $name;
                        echo '</button>';
                        echo '</div>';
                    }
                    echo '<div class="col">Tall<br>Unvoiced</div>';
                    print_key('𐑐', 'p', 'peep');
                    print_key('𐑑', 't', 'tot');
                    print_key('𐑒', 'k', 'kick');
                    print_key('𐑓', 'f', 'fee');
                    print_key('𐑔', 'θ', 'thigh');
                    print_key('𐑕', 's', 'so');
                    print_key('𐑖', 'ʃ', 'sure');
                    print_key('𐑗', 'ʧ', 'church');
                    print_key('𐑘', 'j', 'yea');
                    print_key('𐑙', 'ŋ', 'hung');
                    echo '</div><div class="row">';
                    echo '<div class="col">Deep<br>Voiced</div>';
                    print_key('𐑚', 'b', 'bib');
                    print_key('𐑛', 'd', 'dead');
                    print_key('𐑜', 'ɡ', 'gag');
                    print_key('𐑝', 'v', 'vow');
                    print_key('𐑞', 'ð', 'they');
                    print_key('𐑟', 'z', 'zoo');
                    print_key('𐑠', 'ʒ', 'measure');
                    print_key('𐑡', 'ʤ', 'judge');
                    print_key('𐑢', 'w', 'woe');
                    print_key('𐑣', 'h', 'ha-ha');
                    echo '</div><div class="row">';
                    echo '<div class="col">Short (1)</div>';
                    print_key('𐑤', 'l', 'loll');
                    print_key('𐑮', 'r', 'roar');
                    print_key('𐑥', 'm', 'mime');
                    print_key('𐑯', 'n', 'nun');
                    print_key('𐑦', 'ɪ/i', 'if');
                    print_key('𐑰', 'iː', 'eat');
                    print_key('𐑧', 'ɛ', 'egg');
                    print_key('𐑱', 'eɪ', 'age');
                    print_key('𐑨', 'æ', 'ash');
                    print_key('𐑲', 'aɪ', 'ice');
                    echo '</div><div class="row">';
                    echo '<div class="col">Short (2)</div>';
                    print_key('𐑩', 'ə', 'ado');
                    print_key('𐑳', 'ʌ', 'up');
                    print_key('𐑪', 'ɒ', 'on');
                    print_key('𐑴', 'əʊ', 'oak');
                    print_key('𐑫', 'ʊ', 'wool');
                    print_key('𐑵', 'u(ː)', 'ooze');
                    print_key('𐑬', 'aʊ', 'out');
                    print_key('𐑶', 'ɔɪ', 'oil');
                    print_key('𐑭', 'ɑː', 'ah');
                    print_key('𐑷', 'ɔː', 'awe');
                    echo '</div><div class="row">';
                    echo '<div class="col">Compound</div>';
                    print_key('𐑸', 'ɑː(r)', 'are');
                    print_key('𐑹', 'ɔː(r)', 'or');
                    print_key('𐑺', 'ɛə(r)', 'air');
                    print_key('𐑻', 'ɜː(r)', 'err');
                    print_key('𐑼', 'ə(r)', 'array');
                    print_key('𐑽', 'ɪə(r)', 'ear');
                    print_key('𐑾', 'ɪə', 'Ian');
                    print_key('𐑿', 'ju(ː)', 'yew');
                    echo '<div class="col mb-3 d-grid"><button class="btn btn-danger btn-sm btn-delete">Delete</button></div>';
                    echo '<div class="col mb-3 d-grid"><button class="btn btn-danger btn-sm btn-clear">Clear</button></div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.shavian-key').click(function() {
                let shavian = $('#shavian').val(),
                    ipa = $('#ipa').val(),
                    character = $(this).data('character'),
                    sound = $(this).data('sound');
                $('#shavian').val(shavian + character);
                $('#ipa').val(ipa + sound);
            });
            $('.btn-delete').click(function () {
                let shavian = $('#shavian').val(),
                    ipa = $('#ipa').val();
                $('#shavian').val(shavian.slice(0, -2));
                $('#ipa').val(ipa.slice(0, -1));
            });
            $('.btn-clear').click(function () {
                $('#shavian').val('');
                $('#ipa').val('');
            });
        });
    </script>
</main>
</body>
</html>
