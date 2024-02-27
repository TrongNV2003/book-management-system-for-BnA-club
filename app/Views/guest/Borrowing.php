<!DOCTYPE html>
<html>
   <head>
      <title>Borrowing</title>
      <?= $cssJS ?>
      <base href="<?=base_url() ?>assets/guest/borrowing/">
      <link rel="stylesheet" href="css/borrow.css">
   </head>
   <body>
      <div class="main">
         <?= $header ?>
      </div>
      <div class="content-container">
         <div class="breadcrumb-container">
            <ul class="breadcrumb">
               <li><a href="/">HOME</a></li>
               <li><a href="/Browse/Category">Browse</a></li>
               <li>Borrowing</li>
            </ul>
         </div>
         <?= $leftMenu ?>
         <div class="accordion-container">
            <h1 style="margin-bottom:35px">Borrowing</h1>
            <button class="accordion">Book currently browsing</button>
            <div class="panel">
               <p>Lorem ipsum...</p>
            </div>
            <button class="accordion">Borrowed history</button>
            <div class="panel">
               <table>
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Fee</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>2019-01-01</td>
                        <td>2019-01-01</td>
                        <td>0</td>
                        <td>Returned</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>2019-01-01</td>
                        <td>2019-01-01</td>
                        <td>0</td>
                        <td>Returned</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>2019-01-01</td>
                        <td>2019-01-01</td>
                        <td>0</td>
                        <td>Returned</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>2019-01-01</td>
                        <td>2019-01-01</td>
                        <td>0</td>
                        <td>Returned</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <script src="js/borrow_request.js"></script>
      <?= $footer ?>
   </body>
</html>