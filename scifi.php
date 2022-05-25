<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav6=$_POST['fav6'];

     }
    if (!empty($fav6)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav6='$fav6' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: scifi.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sci-Fi</title>
  <style>
    body {
      background-image: url("./img2.jpg");
      background-color: rgb(220, 202, 177);
      padding: 0px;
      margin: 0;
      font-family: 'Times New Roman', Times, serif;
    }

    table {
      position: absolute;
      left: 50%;
      top: 646px;
      transform: translate(-50%, -50%);
      border-collapse: collapse;
      width: 800px;
      border: 1px solid #bdc3c7;
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
      background-color: rgba(67, 52, 37, 0.9);

    }

    a {
      text-decoration: none;
      color: #fff;
    }

    tr {
      transition: all .2s ease-in;
      cursor: pointer;

    }

    th {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
      color: rgb(220, 202, 177);
    }

    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
      color: #fff;
    }

    #header {
      background-color: rgb(54, 44, 44);
      color: #fff;
      font-size: 25px;
    }

    .home {
      position: relative;
      top: -64px;
      left: 20px;
      display: inline;
      background-color: rgb(220, 202, 177);
      font-size: 23px;
      padding: 7px;
      border-radius: 13px;

    }

    .ahome {
      color: rgb(54, 44, 44);
    }

    .home:hover {
      background-color: rgb(135, 101, 87);
      cursor: pointer;
    }

    .ahome:hover {
      color: aliceblue;
    }

    .cu {
      position: absolute;
      top: 9px;
      right: 20px;
      display: inline;
      background-color: rgb(220, 202, 177);
      font-size: 23px;
      padding: 7px;
      border-radius: 13px;

    }

    .acu {
      color: rgb(54, 44, 44);
    }

    .cu:hover {
      background-color: rgb(135, 101, 87);
      cursor: pointer;
    }

    .acu:hover {
      color: aliceblue;
    }

    h1 {
      font-weight: 600;
      text-align: center;
      background-color: rgb(54, 44, 44);
      color: rgb(220, 202, 177);
      padding: 10px 0px;
      margin-top: 0;
      font-size: 35px;
    }

    tr:hover {
      background-color: rgba(38, 30, 30, 0.604);
      transform: scale(1.02);
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    td a:hover {
      text-decoration: underline;
    }
    .enter{
      display: block;
      margin: auto;
      width: 663px;
    }
  #favbook{
    padding: 11px;
    background-color: rgb(79, 60, 53);
    border-radius: 13px;
    font-size: 20px;
    color: rgb(220, 202, 177);
    border: 1px solid white;
  }
  #fav{
    padding: 7px;
    border-radius: 13px;
    background-color: rgb(220, 202, 177);
    border: 2px solid black;
    width: 220px;
   
  }

    @media only screen and (max-width: 768px) {
      table {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <h1>Sci-Fi Genre</h1>
  <div class="home"><a class="ahome" href="./index.php">Home</a></div>
  <div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
  <div class="enter">
    <form method="post">
      <label id="favbook">Your all time favourite book from this genre is :</label>
      <input type="text" id="fav" name="fav6">
    </form>
  </div>
  <table class="content-table">
    <tr id="header">
      <th>Title of Book</th>
      <th>Author</th>
      <th>Link to buy</th>

    </tr>
    <tr>
      <td>Lost Horizon</td>
      <td>James Hilton </td>
      <td><a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A04807821AVY2Z63OKGN6&url=%2FLost-Horizon-James-Hilton%2Fdp%2F9392554419%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653246871%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653246871&id=5606325762246974&widgetName=sp_atf_browse">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Brave New World</td>
      <td>Aldous Huxley</td>
      <td><a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A022153465SA60PZQGZ&url=%2FBrave-New-World-Aldous-Huxley%2Fdp%2F9390315379%2Fref%3Dsr_1_2_sspa%3Fqid%3D1653246871%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-2-spons%26psc%3D1&qualifier=1653246871&id=5606325762246974&widgetName=sp_atf_browse">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Black Holes</td>
      <td>Stephen Hawking</td>
      <td> <a href="https://www.amazon.in/Stephen-Hawking/e/B000AP5X0M?ref=sr_ntt_srch_lnk_4&qid=1653246871&sr=1-4">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Dark Matter</td>
      <td>Blake Crouch</td>
      <td> <a
          href="https://www.amazon.in/Dark-Matter-Mind-Blowing-Twisted-Thriller/dp/144729758X/ref=sr_1_5?qid=1653246871&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-5">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Project Hail Mary</td>
      <td>Andy Weir </td>
      <td> <a href="https://www.amazon.in/Project-Hail-Mary-Andy-Weir/dp/0593135202">Link To Amazon</a></td>
    </tr>
    <tr>
      <td>Dearly Despised</td>
      <td>Alessandra Hazard</td>
      <td> <a
          href="https://www.amazon.in/Dearly-Despised-Calluvias-Royalty-Book-ebook/dp/B0B1KN5JZG/ref=sr_1_8?qid=1653246871&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-8">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Dune:1</td>
      <td>Frank Herbert</td>
      <td> <a
          href="https://www.amazon.in/Dune-Frank-Herbert/dp/0441172717/ref=sr_1_9?qid=1653246871&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-9">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Time Trap</td>
      <td>Micah Caida</td>
      <td> <a
          href="https://www.amazon.in/Time-Trap-Moon-trilogy-Book-ebook/dp/B00B4IZATS/ref=sr_1_16?qid=1653246871&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-16">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>The Visit(Black Stars)</td>
      <td>Chimamanda Adichie</td>
      <td> <a
          href="https://www.amazon.in/Visit-Black-Stars-Chimamanda-Adichie-ebook/dp/B098QNR21R/ref=sr_1_18?qid=1653246871&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-18">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Divergent Series</td>
      <td>Veronica Roth</td>
      <td> <a href="https://www.amazon.in/Divergent-4-1-Veronica-Roth/dp/0007591373">Link To Amazon</a></td>
    </tr>
    <tr>
      <td>The Atlas Six</td>
      <td>Olivus Blake</td>
      <td> <a
          href="https://www.amazon.in/Atlas-Six-TikTok-made-buy/dp/1529095247/ref=sr_1_20?qid=1653247719&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-20">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Torchwood : Sky Point</td>
      <td>Phil Ford</td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A07362833E1CEW2T0RAXU&url=%2FTorchwood-SkyPoint-Phil-Ford%2Fdp%2F1846075750%2Fref%3Dsr_1_21_sspa%3Fqid%3D1653247719%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-21-spons%26psc%3D1&qualifier=1653247719&id=2076076368381559&widgetName=sp_btf_browse">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Displaced</td>
      <td>Stephen Drake</td>
      <td> <a href="https://www.amazon.in/Stephen-Drake/e/B01LVYJTS1?ref=sr_ntt_srch_lnk_19&qid=1653247875&sr=1-19">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Rise of the Cholas:Apocalypse</td>
      <td>J.V. Jayakumar</td>
      <td> <a
          href="https://www.amazon.in/RISE-CHOLAS-APOCALYPSE-J-V-JAYAKUMAR-ebook/dp/B08289C9HZ/ref=sr_1_22?qid=1653247875&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-22">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Recursion</td>
      <td>Blake Crouch</td>
      <td> <a
          href="https://www.amazon.in/Recursion-Blake-Crouch/dp/1509866671/ref=sr_1_25?qid=1653247875&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-25">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>The Female Man</td>
      <td>Joanna Rush</td>
      <td> <a
          href="https://www.amazon.in/Female-Man-S-F-Masterworks/dp/0575094990/ref=sr_1_28_sspa?qid=1653247875&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-28-spons&psc=1&smid=A3H3WE9M6NY1KV&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExSFJRR1RSOEVDVU1DJmVuY3J5cHRlZElkPUEwNjM0NDk4MzFTUk1VRUsyN1pGWSZlbmNyeXB0ZWRBZElkPUEwMjc2ODg5MUFWNE43QVMwNFpORyZ3aWRnZXROYW1lPXNwX210Zl9icm93c2UmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Virtually Lost</td>
      <td>Shreyan Laha</td>
      <td> <a
          href="https://www.amazon.in/Virtually-Lost-Shreyan-Laha-ebook/dp/B09K6D1HW5/ref=sr_1_33?qid=1653247875&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-33">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Chart Throb</td>
      <td>Ben Elton</td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A00388881V61GHJNEJ98I&url=%2FChart-Throb-Ben-Elton%2Fdp%2F055277376X%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653248689%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%252Cp_36%253A1741388031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1%26smid%3DA22MCJYHC06T6V&qualifier=1653248689&id=8645074735977985&widgetName=sp_atf_browse">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>ZERO</td>
      <td>Natham M Farrrugia</td>
      <td> <a
          href="https://www.amazon.in/ZERO-Helix-Book-Nathan-Farrugia-ebook/dp/B08GF83S1W/ref=sr_1_10?qid=1653248689&refinements=p_n_feature_three_browse-bin%3A9141482031%2Cp_36%3A1741388031&rnid=1402038031&s=books&sr=1-10">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Science and Magic : The Search Begin</td>
      <td>Aditya Upadhaya</td>
      <td> <a
          href="https://www.amazon.in/Science-Magic-Search-Aditya-Upadhaya-ebook/dp/B08P1KF3FL/ref=sr_1_12?qid=1653248689&refinements=p_n_feature_three_browse-bin%3A9141482031%2Cp_36%3A1741388031&rnid=1402038031&s=books&sr=1-12">Link
          To Amazon</a></td>
    </tr> 
  </table>
</body>

</html>