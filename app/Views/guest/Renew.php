<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renew</title>
    <base href="<?=base_url() ?>assets/guest/requestForm/">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 id="page-title">Renew book loans</h1>
    <br>
    <div class="form-renew-book">
        <form>
            <p><b>Enter the book codes you wish to renew</b></p>
            <input type="text" id="renew-book-code" name="renew-book-code">

            <p><b>How long do you want to extend the loan?</b></p>
            <input type="radio" id="option-one-week" name="time-extend-option" value="one-week">
            <label for="one-week-option">1 week</label>
            <br>
            <input type="radio" id="option-two-week" name="time-extend-option" value="two-week">
            <label for="two-week-option">2 weeks</label>

            <!-- TODO: The "Back" button take the user back to where they came from
                    be sure to add a functionality for this!-->
            <div class="form-buttons">
                <input type="button" id="button-back" value="Back" onclick="location.href='/'">
                <input type="submit" id="button-submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>