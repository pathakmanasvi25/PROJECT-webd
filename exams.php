<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav9=$_POST['fav9'];

     }
    if (!empty($fav9)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav9='$fav9' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: exams.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams</title>
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
 <h1>Competitive Exams</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">A book which helped you a lot in your exams :</label>
    <input type="text" id="fav" name="fav9">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
        
         <tr>
            <td>Problem In General Physics</td>
            <td>I.E. Irodov</td>
            <td><a href="https://www.amazon.in/Problems-GENERAL-PHYSICS-I-Irodov/dp/9351762564/ref=sr_1_7?qid=1653288342&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-7" target="_blank" >Link To Amazon</a></td>
         </tr>
          <tr>
            <td>Pearson IIT Foundation Physics</td>
            <td>Trishna</td>
            <td><a href="https://www.amazon.in/Pearson-Foundation-Physics-Class-2022/dp/9354498396/ref=sr_1_10?qid=1653288342&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-10" target="_blank"> Link To Amazon</a></td>
           </tr>
          <tr>
            <td>Understanding Physics for Jee Main and Advanced Mechanics</td>
            <td>D.C. Pandey</td>
            <td> <a href="https://www.amazon.in/Understanding-Physics-Main-Advanced-Mechanics/dp/9325298724/ref=sr_1_3?qid=1653288524&refinements=p_n_feature_three_browse-bin%3A9141482031%2Cp_lbr_books_authors_browse-bin%3ADC+Pandey&rnid=7251634031&s=books&sr=1-3" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>General Knowledge</td>
            <td>Dr. Vinay Karna</td>
            <td> <a href="https://www.amazon.in/General-Knowledge-Dr-Binay-Karna/dp/9384761540/ref=sr_1_3?qid=1653288712&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-3" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>How to Crack Test of Reasoning</td>
            <td>Jaikishan and Premkishan</td>
            <td> <a href="https://www.amazon.in/How-Crack-Test-Reasoning-Jaikishan/dp/9313166755/ref=sr_1_6?qid=1653288712&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-6" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Current Affairs Yearly 2022</td>
            <td>Arihant Expert</td>
            <td> <a href="https://www.amazon.in/Current-Affairs-Yearly-Arihant-Experts/dp/9325799952/ref=sr_1_8?qid=1653288712&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-8" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Objective General English</td>
            <td>SP Bakshi</td>
            <td> <a href="https://www.amazon.in/Objective-General-English-SP-Bakshi/dp/9325791714/ref=sr_1_14?qid=1653288712&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-14" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Social Structure,Issues and Policies</td>
            <td>Telugu Academy</td>
            <td> <a href="https://www.amazon.in/Social-Structure-Issues-Policies-Akademi/dp/818180306X/ref=sr_1_17?qid=1653288712&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-17" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Self Study Guide LLB Entrance Examination 2022</td>
            <td>Arihant Expert</td>
            <td> <a href="https://www.amazon.in/Self-Study-Guide-Entrance-Examination/dp/9325793466/ref=sr_1_4?qid=1653289111&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-4" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>CLAT Entrance Exam Guide</td>
            <td>Learnx</td>
            <td> <a href="https://www.amazon.in/CLAT-Exam-Guide-LearnX/dp/B07Z3M6143/ref=sr_1_10?qid=1653289111&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-10" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Descriptive Book</td>
            <td>Nimisha Bansal</td>
            <td> <a href="https://www.amazon.in/DESCRIPTIVE-BOOK-ENGLISH-NIMISHA-BANSAL/dp/8195181449/ref=sr_1_21?qid=1653289329&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=9141481031&s=books&sr=1-21" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>MNS Guide</td>
            <td>Shishir Dixit</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A01599321B1I1IMPG1PHH&url=%2FStudy-Centurion-Education-pvt-ltd%2Fdp%2FB08GG4VK2S%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653305631%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D4149751031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653305631&id=69293708853352&widgetName=sp_atf_browse" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Get Success in SSB Interview</td>
            <td>Arihant Expert</td>
            <td> <a href="https://www.amazon.in/Get-Success-Interviews-Arihant-Experts/dp/9312148869/ref=sr_1_18?qid=1653305631&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=4149751031&s=books&sr=1-18" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Mission NDA:Serve at Young Age</td>
            <td>Defence Direct Education</td>
            <td> <a href="https://www.amazon.in/Mission-NDA-Serve-Young-Age/dp/8193825977/ref=sr_1_5?qid=1653305631&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=4149751031&s=books&sr=1-5" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>CDS (Combined Defence Services Entrance Examination</td>
            <td>Defence Direct Education</td>
            <td> <a href="https://www.amazon.in/Combined-Book-DDE-DEFENCE-DIRECT-EDUCATION/dp/B07BQ1KTDC/ref=sr_1_13?qid=1653305631&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=4149751031&s=books&sr=1-13" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Organic Chemistry for NEET</td>
            <td>Wiley's Solomons</td>
            <td> <a href="https://www.amazon.in/Solomons-Organic-Chemistry-Entrance-Examinations/dp/9354248780/ref=sr_1_18_sspa?qid=1653309980&s=books&sr=1-18-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFSREs2RkY3NVhWOFImZW5jcnlwdGVkSWQ9QTA4ODAyMjEzN0RRWUxVQlpXRVdKJmVuY3J5cHRlZEFkSWQ9QTAwMzg4NDIzOUVSTEJSNVo0M1NXJndpZGdldE5hbWU9c3BfYXRmX2Jyb3dzZSZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>JEE Main 40 Days</td>
            <td>Arihant Experts</td>
            <td> <a href="https://www.amazon.in/Days-Crash-Course-Main-Mathematics/dp/9325796317/ref=sr_1_5?keywords=jee+main+books&qid=1653310047&sr=8-5" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Indian Polity</td>
            <td>M. Laxmikanth</td>
            <td> <a href="https://www.amazon.in/Indian-Polity-5th-M-Laxmikanth/dp/935260363X" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>GATE-2023</td>
            <td>MADE EASY Editorial Board </td>
            <td> <a href="https://www.amazon.in/GATE-2023-Electrical-Engineering-Previous-Solved/dp/9393165238?ref_=Oct_d_obs_d_4149761031&pd_rd_w=Te2XD&pf_rd_p=63783fbe-7156-4f6f-9542-5efc5e74da13&pf_rd_r=Y478XZS24JFXNGVGHTV3&pd_rd_r=5e827f9b-0a47-4f6a-aa7c-e552b6550575&pd_rd_wg=pKdGo&pd_rd_i=9393165238" target="_blank"> Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Handbook Series of ECE</td>
            <td>Experts Compilation</td>
            <td> <a href="https://www.amazon.in/Handbook-Electronics-Communication-Engineering-Compilation/dp/9350943840/ref=lp_15426694031_1_1" target="_blank"> Link To Amazon</a></td>
             </tr>
        
      </table>
</body>
</html>