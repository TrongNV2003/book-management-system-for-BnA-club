<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book</title>
    <base href="<?= base_url() ?>assets/guest/requestForm/">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 id="page-title">Return book</h1>
    <br>
    <div class="form-return-book">
        <form>
            <p><b>Enter the book codes that you want to return</b></p>
            <input type="text" id="return-book-code" name="return-book-code">

            <!-- TODO: The "Back" button take the user back to where they came from
                be sure to add a functionality for this!-->
            <div class="form-buttons" style="margin-top: 15px;">
                <input type="button" id="button-back" value="Back" onclick="location.href='/'">
                <input type="submit" id="button-submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>