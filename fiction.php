<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav4=$_POST['fav4'];

     }
    if (!empty($fav4)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav4='$fav4' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: fiction.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiction</title>
    <style>
  body {
      background-image: url("./img2.jpg");
      background-color: rgb(220,202,177);
        padding: 0px;
        margin: 0;
        font-family:'Times New Roman', Times, serif;
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
    a{
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
        color: rgb(220,202,177);
    } 
    
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #fff;
        color: #fff;
    } 
    
     #header {
        background-color: rgb(54,44,44);
        color: #fff;
        font-size: 25px;
    }
    .home{
          position: relative;
          top: -64px;
          left: 20px;
          display: inline;
          background-color: rgb(220,202,177);
          font-size: 23px;
          padding: 7px;
          border-radius: 13px;

    }
    .ahome{
        color: rgb(54,44,44);
    }
    .home:hover{
        background-color: rgb(135, 101, 87);
        cursor: pointer;
    }
    .ahome:hover{
        color: aliceblue;
    }
    .cu{
          position: absolute;
          top: 9px;
          right: 20px;
          display: inline;
          background-color: rgb(220,202,177);
          font-size: 23px;
          padding: 7px;
          border-radius: 13px;

    }
    .acu{
        color: rgb(54,44,44);
    }
    .cu:hover{
        background-color: rgb(135, 101, 87);
        cursor: pointer;
    }
    .acu:hover{
        color: aliceblue;
    }
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: rgb(54,44,44);
        color: rgb(220,202,177);
        padding: 10px 0px;
        margin-top: 0;
        font-size: 35px;
    }
    
    tr:hover {
        background-color: rgba(38, 30, 30, 0.604);
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    td a:hover{
        text-decoration: underline;
    }
    td a{
      text-decoration-line: underline;
       text-decoration-thickness: 1.2px; 
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
 <h1>Literary Fiction</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">Your all time favourite book from this genre is :</label>
    <input type="text" id="fav" name="fav4">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
          <tr>
            <td>The Original Black Beauty</td>
            <td>Anna Sewel</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A02145392WG7NJ97W96VG&url=%2FOriginals-Black-Beauty-Anna-Sewell%2Fdp%2F9352766431%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653285779%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653285779&id=7661790816979788&widgetName=sp_atf_browse"  target="_blank">Link To Amazon</a></td>
         </tr>
          <tr>
            <td>Wuthering Heights</td>
            <td>Emily Bronte</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0222331NGKJCXERAJ5F&url=%2FOriginals-Wuthering-Heights-Emily-Bronte%2Fdp%2F9352762886%2Fref%3Dsr_1_2_sspa%3Fqid%3D1653285779%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-2-spons%26psc%3D1&qualifier=1653285779&id=7661790816979788&widgetName=sp_atf_browse"  target="_blank">Link To Amazon</a></td>
           </tr>
           <tr>
            <td>The Kite Runner</td>
            <td>Khaled Hosseini</td>
            <td> <a href="https://www.amazon.in/Kite-Runner-Khaled-Hosseini/dp/1408850257"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>A Thousand Splendid Stars</td>
            <td>Khaled Hosseini</td>
            <td> <a href="https://www.amazon.in/Thousand-Splendid-Suns-Khaled-Hosseini/dp/1408844443/ref=pd_lpo_2?pd_rd_i=1408844443&psc=1"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Handmaid's Tale</td>
            <td>Nick</td>
            <td> <a href="https://www.amazon.in/Handmaids-Tale-Margaret-Atwood/dp/0224101935"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Great Gatsby</td>
            <td>F. Scott Fitzgerald</td>
            <td> <a href="https://www.amazon.in/Great-Gatsby-F-Scott-Fitzgerald/dp/0743273567"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Jane Eyre</td>
            <td>Charlotte Brontë</td>
            <td> <a href="https://www.amazon.in/Jane-Eyre-Charlotte-Bronte/dp/8193387619"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Think and Grow</td>
            <td>Napoleon Hill</td>
            <td> <a href="https://www.amazon.in/Think-Grow-Rich-Illustrated-Napoleon-ebook/dp/B079H2CMT2/ref=sr_1_7?qid=1653285779&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-7"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Brother Karamazov</td>
            <td>Fyodor Dostoevsky and Constance Garnett</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_mtf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A02150951KPN33CGC35VO&url=%2FOriginals-Brothers-Karamazov-Fyodor-Dostoevsky%2Fdp%2F9352763343%2Fref%3Dsr_1_12_sspa%3Fqid%3D1653285779%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-12-spons%26psc%3D1&qualifier=1653285779&id=7661790816979788&widgetName=sp_mtf_browse"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>As a Man Thinketh</td>
            <td>James Allen</td>
            <td> <a href="https://www.amazon.in/As-Man-Thinketh-James-Allen/dp/9386538172/ref=sr_1_18?qid=1653285779&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-18"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Fingerprint </td>
            <td>Various </td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0419072S5PNZXQZIPSI&url=%2FWorlds-Greatest-Horror-Stories-Collectable%2Fdp%2F9389053153%2Fref%3Dsr_1_21_sspa%3Fqid%3D1653285779%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-21-spons%26psc%3D1&qualifier=1653285779&id=7661790816979788&widgetName=sp_btf_browse"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Idiot</td>
            <td>Fyodor Dostoevsky</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A02280591JSSO35ZC49S2&url=%2FOriginals-Idiot-Fyodor-Dostoevsky%2Fdp%2F9352766741%2Fref%3Dsr_1_22_sspa%3Fqid%3D1653285779%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-22-spons%26psc%3D1&qualifier=1653285779&id=7661790816979788&widgetName=sp_btf_browse"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Beyond Something</td>
            <td>Gaurav Katoch</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg2_1?ie=UTF8&adId=A03357252E21B7QY2NS60&url=%2FBeyond-Something-Gaurav-Katoch%2Fdp%2F939321221X%2Fref%3Dsr_1_17_sspa%3Fqid%3D1653286402%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-17-spons%26psc%3D1&qualifier=1653286402&id=7652736341856091&widgetName=sp_atf_browse"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>American World Literature</td>
            <td>Paul Giles</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg2_1?ie=UTF8&adId=A07741942DNJG7PDNUHJ7&url=%2FAmerican-World-Literature-Paul-Giles%2Fdp%2F1119431786%2Fref%3Dsr_1_18_sspa%3Fqid%3D1653286402%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-18-spons%26psc%3D1&qualifier=1653286402&id=7652736341856091&widgetName=sp_atf_browse"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Treasure Island</td>
            <td>Robert Louis Stevenson</td>
            <td> <a href="https://www.amazon.in/Treasure-Island-Robert-Louis-Stevenson/dp/8172344767/ref=sr_1_19?qid=1653286402&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-19"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Man’s Search for Meaning</td>
            <td>Viktor E. Frenkel</td>
            <td> <a href="https://www.amazon.in/Mans-Search-Meaning-Viktor-Frankl/dp/1846041244/ref=sr_1_32?qid=1653286402&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-32"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>She Stood by Me</td>
            <td>Tarun Vikash</td>
            <td> <a href="https://www.amazon.in/She-Stood-Me-Tarun-Vikash/dp/B082Y1DMHP/ref=sr_1_33?qid=1653286402&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-33"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Wise and Otherwise : A Salute to Life </td>
            <td>Sudha Murty</td>
            <td> <a href="https://www.amazon.in/Wise-Otherwise-salute-Sudha-Murty/dp/0143062220/ref=sr_1_35?qid=1653286402&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-35"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Blue Mountain</td>
            <td>Agastya Shankla</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg2_1?ie=UTF8&adId=A01410801KHBFYIFDUQU5&url=%2FBLUE-MOUNTAIN-AGASTYA-SHANKHLA%2Fdp%2F9355931719%2Fref%3Dsr_1_37_sspa%3Fqid%3D1653286402%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-37-spons%26psc%3D1&qualifier=1653286402&id=7652736341856091&widgetName=sp_btf_browse"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Cashback</td>
            <td>Duncan James</td>
            <td> <a href="https://www.amazon.in/Cashback-Duncan-James-ebook/dp/B004LZ4BKU/ref=sr_1_36?qid=1653286953&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-36"  target="_blank">Link To Amazon</a></td>
             </tr>
         
        
      </table>
</body>
</html>