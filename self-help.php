<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav5=$_POST['fav5'];

     }
    if (!empty($fav5)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav5='$fav5' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: self-help.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self-Help</title>
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
 <h1>Self-Help Books</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">Your all time favourite book from this genre is :</label>
    <input type="text" id="fav" name="fav5">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
          <tr>
            <td>Rich Dad Poor Dad</td>
            <td>Robert T. Kiyosaki</td>
            <td> <a href="https://www.amazon.in/Rich-Dad-Poor-Teach-Middle/dp/197869170X/ref=asc_df_197869170X/?tag=googleshopdes-21&linkCode=df0&hvadid=586311227024&hvpos=&hvnetw=g&hvrand=3422597122342767482&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9303169&hvtargid=pla-1602170368745&psc=1"target="_blank" >Link To Amazon</a></td>
             </tr>
          <tr>
            <td>How to Win Friends & Influence People </td>
            <td>Dale Carnegie</td>
            <td> <a href="https://www.amazon.com/How-Win-Friends-Influence-People/dp/0671027034" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Power of Now</td>
            <td>Eckhart Tolle</td>
            <td> <a href="https://www.amazon.com/Power-Now-Guide-Spiritual-Enlightenment/dp/1577314808" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Subtle Art of Not Giving a Fuck</td>
            <td>Mark Manson</td>
            <td> <a href="https://www.amazon.in/Subtle-Art-Not-Giving/dp/0062641549" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Secret</td>
            <td>Rhonda-Byrne</td>
            <td> <a href="https://www.amazon.in/Secret-Rhonda-Byrne/dp/1582701709" target="_blank" > Link To Amazon</a></td>
             </tr>
           <tr>
            <td>Against Gods</td>
            <td>Peter L. Berstein</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A016993538F38XLKHLB6R&url=%2FAgainst-Gods-Remarkable-Story-Risk%2Fdp%2F0471295639%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653306201%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653306201&id=6173452023360802&widgetName=sp_atf_browse" target="_blank" > Link To Amazon</a></td>
         </tr>
          <tr>
            <td>Master Your Emotions</td>
            <td>Thibaut Meurisse</td>
            <td><a href="https://www.amazon.in/Master-Your-Emotions-Practical-Negativity-ebook/dp/B07CX8H6YH/ref=sr_1_3?qid=1653306201&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-3" target="_blank" > Link To Amazon</a></td>
           </tr>
          <tr>
            <td>The Psychology of Money</td>
            <td>Morgan Housel</td>
            <td> <a href="https://www.amazon.in/Psychology-Money-Morgan-Housel/dp/9390166268/ref=sr_1_4?qid=1653306201&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-4" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>How to Talk to Anyone</td>
            <td>Leil Lowndes</td>
            <td> <a href="https://www.amazon.in/How-Talk-Anyone-Success-Relationships/dp/B079TJV5ZP/ref=sr_1_8?qid=1653306201&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-8" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Power of Positive Team</td>
            <td>Jon Gordon</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_mtf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0473099292U39WJLNZ8Z&url=%2FPower-Positive-Team-Principles-Practices%2Fdp%2F1119430240%2Fref%3Dsr_1_11_sspa%3Fqid%3D1653306201%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D9141481031%26s%3Dbooks%26sr%3D1-11-spons%26psc%3D1&qualifier=1653306201&id=6173452023360802&widgetName=sp_mtf_browse" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>A Beginner Guide to Stock Market</td>
            <td>Mathew R. Kratter</td>
            <td> <a href="https://www.amazon.in/Beginners-Guide-Stock-Market-Everything-ebook/dp/B07S31TBF5/ref=sr_1_13?qid=1653306201&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-13" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Deep Work</td>
            <td>Cal Newport</td>
            <td> <a href="https://www.amazon.in/Deep-Work-Focused-Success-Distracted/dp/0349413681/ref=sr_1_14?qid=1653306201&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-14" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Trading Master Mind Book</td>
            <td>Zebra Learn</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_mtf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A037361712TR9LYKW5YXV&url=%2FTrading-Mastermind-Book-Become-Scratch%2Fdp%2FB09V7R6BZZ%2Fref%3Dsr_1_11_sspa%3Fqid%3D1653306836%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318068031%26s%3Dbooks%26sr%3D1-11-spons%26psc%3D1&qualifier=1653306836&id=2571691817190190&widgetName=sp_mtf_browse" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Intelligent Investor</td>
            <td>Benjamin Graham</td>
            <td> <a href="https://www.amazon.in/Intelligent-Investor-English-Paperback-2013/dp/0062312685/ref=sr_1_15?qid=1653306836&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318068031&s=books&sr=1-15" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Mindset</td>
            <td>Carol Dweck</td>
            <td> <a href="https://www.amazon.in/Mindset-Changing-think-Fulfil-Potential/dp/1780332009/ref=sr_1_18?qid=1653306836&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318068031&s=books&sr=1-18" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Thinking Fast and Slow</td>
            <td>Daniel Kehneman</td>
            <td> <a href="https://www.amazon.in/Thinking-Fast-Penguin-Press-Non-Fiction/dp/0141033576/ref=sr_1_19?qid=1653306836&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318068031&s=books&sr=1-19" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Common Stock and Common Sense</td>
            <td>Edgar Wechanheim III</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A02620672IMSLFULKKZ4U&url=%2FCommon-Stocks-Sense-Strategies-Particularly%2Fdp%2F1119259606%2Fref%3Dsr_1_22_sspa%3Fqid%3D1653306836%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318068031%26s%3Dbooks%26sr%3D1-22-spons%26psc%3D1&qualifier=1653306836&id=2571691817190190&widgetName=sp_btf_browse" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Getting Started in Technical Analysis</td>
            <td>Jack D Schwegar</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg2_1?ie=UTF8&adId=A02416352I2NOSRST04C5&url=%2FGetting-Started-Technical-Analysis-Book-ebook%2Fdp%2FB000U5I1JM%2Fref%3Dsr_1_17_sspa%3Fqid%3D1653307280%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318068031%26s%3Dbooks%26sr%3D1-17-spons%26psc%3D1&qualifier=1653307280&id=6184384948840592&widgetName=sp_atf_browse" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Rework </td>
            <td>Jason Fried</td>
            <td> <a href="https://www.amazon.in/Rework/dp/B079VHMW6V/ref=zg_bs_27318569031_1/260-6400368-5313615?pd_rd_i=B079VHMW6V&psc=1" target="_blank" > Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Zero To One</td>
            <td>Peter Theil</td>
            <td> <a href="https://www.amazon.in/Zero-to-One/dp/B079ZSBCPD/ref=sr_1_4?qid=1653307627&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-4" target="_blank" > Link To Amazon</a></td>
             </tr>
         
        
      </table>
</body>
</html>