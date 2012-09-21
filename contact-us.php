  <!-- content -->
  <div id="content">
    <div class="indent1">
      <h2>تماس با ما </h2>
      <h4>کاربر گرامی شما می توانید انتقادات وپیشنهادات ونظرات خود را از راه های تماس زیر با ما در میان بگذارید.</h4>
      <form id="contacts-form" action="sendmail.php">
          <label> نام:</label>
          <input type="text" name="name" id="name" placeholder="نام"/>
          <label> آدرس ایمیل:</label>
          <input type="text" name="email" id="email" placeholder="ایمیل"/>
          <label> عنوان موضوع:</label>
          <input type="text" name="subject" id="subject" placeholder="عنوان"/>
          <label>نظرات و پیشنهادات شما :</label>
          <textarea cols="1" rows="1" name="txt" id="txt" placeholder="متن" ></textarea>
          <input class="btn" type="submit" name="submit" id="submit" value="ارسال"/>
          <input class="btn" type="reset" name="reset" id="reset" value="پاک کردن فرم" />
      </form>
      <iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>