<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav7=$_POST['fav7'];

     }
    if (!empty($fav7)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav7='$fav7' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: romance.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romance</title>
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
 <h1>Romantic Novels</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">Your all time favourite book from this genre is :</label>
    <input type="text" id="fav" name="fav7">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
        
        
          <tr>
            <td>A tale of love,life and legacy</td>
            <td>Bhagyashree Ranade</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A032048435ATP7RF5EMAJ&url=%2FBookshelf-Whispers-Tale-Love-Legacy%2Fdp%2F1639574794%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653241452%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653241452&id=5958748629390906&widgetName=sp_atf_browse" " target="_blank">Link To Amazon</a></td>
         </tr>
          <tr>
            <td>If only love was enough</td>
            <td>Namrata Gupta</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A04742671BIJD7GXV3L2D&url=%2FIf-Only-Love-was-Enough%2Fdp%2F9390909147%2Fref%3Dsr_1_2_sspa%3Fqid%3D1653241452%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-2-spons%26psc%3D1&qualifier=1653241452&id=5958748629390906&widgetName=sp_atf_browse" " target="_blank">Link To Amazon</a></td>
           </tr>
          <tr>
            <td>Until you: A billionaire romance</td>
            <td>M.V. Kashi</td>
            <td> <a href="https://www.amazon.in/Until-You-Billionaires-Arranged-Romance-ebook/dp/B07XGC9LPS/ref=sr_1_5?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-5" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The girl in room 105</td>
            <td>Chetan Bhagat</td>
            <td> <a href="https://www.amazon.in/Girl-Room-105-Chetan-Bhagat/dp/1542040469/ref=sr_1_8?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-8" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The devil’s desire:A billionaire romance</td>
            <td>M.V. Kashi</td>
            <td> <a href="https://www.amazon.in/Devils-Desire-Passionate-Billionaire-Romance-ebook/dp/B087XCZWWM/ref=sr_1_9?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-9" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Love that never completed</td>
            <td>Aman Gupta</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_mtf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0512730V9ZAQF3AV6SC&url=%2FLove-That-Never-Completed-Gupta%2Fdp%2F9354270794%2Fref%3Dsr_1_11_sspa%3Fqid%3D1653241452%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-11-spons%26psc%3D1&qualifier=1653241452&id=5958748629390906&widgetName=sp_mtf_browse" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The love hypothesis</td>
            <td>Ali Hazelwood</td>
            <td> <a href="https://www.amazon.in/Love-Hypothesis-Tiktok-made-romcom/dp/1408725762/ref=sr_1_14?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-14" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Reminders of him</td>
            <td>Coleen Hoover</td>
            <td> <a href="https://www.amazon.in/Reminders-Him-Colleen-Hoover/dp/1542025605/ref=sr_1_15?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-15" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>All I ever want is you</td>
            <td>Nikhil Raj</td>
            <td> <a href="https://www.amazon.in/All-Ever-Want-You-Adapted-ebook/dp/B085MLB3YT/ref=sr_1_18?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-18" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Pride and Prejudice</td>
            <td>Jane Austen </td>
            <td> <a href="https://www.amazon.in/Pride-Prejudice-AmazonClassics-Jane-Austen-ebook/dp/B071SKHMDL/ref=sr_1_20?qid=1653241452&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-20" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Letters to kay</td>
            <td>Matoof Khan</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0005782V0U3EM5FG819&url=%2FLetters-Kay-Matoof-Khan%2Fdp%2F9384411671%2Fref%3Dsr_1_22_sspa%3Fqid%3D1653241452%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-22-spons%26psc%3D1&qualifier=1653241452&id=5958748629390906&widgetName=sp_btf_browse" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Heartthrob</td>
            <td>Sundari Venkatraman </td>
            <td> <a href="https://www.amazon.in/Heartthrob-Sundari-Venkatraman-ebook/dp/B09Z7C91KV/ref=sr_1_19?qid=1653242497&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-19" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Owned by a sinner:An Irish Mafia Romance</td>
            <td>Michelle Heard     </td>
            <td> <a href="https://www.amazon.in/Owned-Sinner-Irish-Mafia-Romance-ebook/dp/B09VZ94XJF/ref=sr_1_24?qid=1653242497&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-24" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Meet me in Montana</td>
            <td>Debra Salonen</td>
            <td> <a href="https://www.amazon.in/Meet-Montana-Property-Sisters-Book-ebook/dp/B084STPXWB/ref=sr_1_25?qid=1653242497&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-25" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The last Eligible Billionarie</td>
            <td>Pippa Grant</td>
            <td> <a href="https://www.amazon.in/Last-Eligible-Billionaire-Pippa-Grant-ebook/dp/B09T2PCLW8/ref=sr_1_31?qid=1653242497&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-31" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Destined </td>
            <td>Rubina Ramesh</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg2_1?ie=UTF8&adId=A04513562Z57N9JSW3EH8&url=%2FDestined-Rubina-Ramesh-ebook%2Fdp%2FB075ZS2MZH%2Fref%3Dsr_1_38_sspa%3Fqid%3D1653242497%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-38-spons%26psc%3D1&qualifier=1653242497&id=278183230505802&widgetName=sp_btf_browse" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Something I never told You</td>
            <td>Shravya Bhinder</td>
            <td> <a href="https://www.amazon.in/Something-I-Never-Told-You/dp/0143445901/ref=sr_1_36?qid=1653243179&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-36" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Fault in our Stars</td>
            <td>John Green</td>
            <td> <a href="https://www.amazon.in/Fault-our-Stars-John-Green/dp/0141345659/ref=sr_1_37?qid=1653243179&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-37" " target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Cruel Princess</td>
            <td>Jillian Frost</td>
            <td> <a href="https://www.amazon.in/Cruel-Princes-Devils-Creek-Book-ebook/dp/B09MSMXJ1B/ref=sr_1_36?qid=1653243179&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-36" " target="_blank">Link To Amazon</a></td>
             </tr>
        
      </table>
</body>
</html>