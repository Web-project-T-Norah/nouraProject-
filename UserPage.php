<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>

    <meta charset="UTF-8">
    <title>USER PAGE</title>
    <link rel="stylesheet" href="UserPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Yatra+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
    
  </head>

  <body>
      <div class="navbar">
        <p>ازرع </p>
        <ul>
          <li> <a href="prisntion.html"> الرئيسية </a></li>
          <li> <a href="iner.html"> نباتات داخلية</a> </li>
          <li><a href="out.html"> نباتات خارجية</a> </li>
          <li> <a href="#"> نباتات ظل</a> </li>
          <li> <a href="Flowring.html"> نباتات مزهرة </a> </li>
        </ul>
      </div>
  <div class="header">
  <h4>للإقتراحات أو الملاحظات اكتب هنا :</h4>
  </div>
  <div id="frm">
    <form action="process.php" method="POST">
      <p>اسم المستخدم:
      <input type="text" id="user" name="uname" placeholder=" Enter your name " required>
      </p>
	  <p id="paraP">الايميل:
      <input type="Email" id="email" name="uemail" placeholder=" example@example.com" required>
      </p>
	  <p>اقتراح أو ملاحظة :
	  <input type="text" id="comment" name="ucomment" placeholder=" Enter your comments here " required>
	  </p>
      <input type="submit" id="btn" name="send" value="إرسال">
    </form>
  </div>
  
  
  
  
  </body>
  </html>