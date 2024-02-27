<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow</title>
    <base href="<?=base_url() ?>assets/guest/requestForm/">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 id="page-title">Borrow books</h1>
    <br>
    <div class="form-renew-book">
        <form>
            <p><b>Enter the book codes you want to borrow(Example: XH-123, GT-123,... You may enter more than one code)</b></p>
            <input type="text" id="renew-book-code" name="renew-book-code">

            <p><b>How long do you want to borrow?</b></p>
            <input type="radio" id="option-one-week" name="time-extend-option" value="one-week">
            <label for="one-week-option">1 week</label>
            <br>
            <input type="radio" id="option-two-week" name="time-extend-option" value="two-week">
            <label for="two-week-option">2 weeks</label>
            <br>
            <input type="radio" id="option-three-week" name="time-extend-option" value="three-week">
            <label for="three-week-option">3 weeks</label>
            <br>
            <input type="radio" id="option-four-week" name="time-extend-option" value="four-week">
            <label for="four-week-option">4 weeks</label>

            <p><b>Where did you get the book from?</b></p>
            <input type="radio" id="tusach-book-origin" name="book-origin-option" value="tusach">
            <label for="tusach-book-origin">Bookshelves of BnA USTH</label>
            <br>
            <input type="radio" id="khosach-book-origin" name="book-origin-option" value="khosach">
            <label for="khosach-book-origin">Book storage of BnA USTH</label>

            <p><b>Please check out our fanpage on Facebook! &lt;3 <a href="https://www.facebook.com/bna.usthclub">Click here UwU</a></b></p>

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