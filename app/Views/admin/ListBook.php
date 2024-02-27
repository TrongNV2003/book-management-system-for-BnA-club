<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Book</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>assets/admin/home/js/HomeJS.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/admin/home/css/maintable.css">
        <?= $cssJS ?>
    </head>

    <body>
        <?= $sideNav ?>

    <!-- Page content -->
        <div class="content">
            <?= $topNav ?>
            
            <div class="title-table">Book list</div>
            <div class = "usertable">
                <table id="maintable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Condition</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book) : ?>
                            <tr>
                                <td><?=$book['bookID']?></td>
                                <td><?=$book['title']?></td>
                                <td><?=$book['author']?></td>
                                <td><?=$book['book_condition']?></td>
                                <td><?=$book['location']?></td>
                                <td><?=$book['type']?></td>
                                <td><?=$book['description']?></td>
                                <td class="btn"><button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button><button class="deny-btn"><i class="fa-solid fa-trash-can"></i></button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>