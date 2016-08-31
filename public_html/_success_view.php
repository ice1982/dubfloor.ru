<?php if (isset($_GET['email_ok'])) : ?>
<div class="send-status send-status-ok" id="send-status-ok" style="width:450px;padding:20px;border: 5px solid green;">
    <div class="container">
       <h2 style="text-align: center;font-family:'Open Sans'">Спасибо за заявку</h2>
       <br>
        <p style="font-size: 16px;font-family:'Open Sans'">
            Ваш каталог скачается автматически через <span id="count">5</span> секунд<br>
            Если скачивание не началось нажмите: <a href="catalogue/dub_Solid_Floor_2016.pdf" id="link" style="color: lawngreen">скачать каталог</a>
        </p>
    </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['email_fail'])) : ?>
<div class="send-status send-status-ok" id="send-status-ok" style="width:450px;padding:20px;border: 5px solid red;">
    <div class="container">
       <h2 style="text-align: center;font-family:'Open Sans';padding:20px 0">Заполните форму правильно</h2>
    </div>
</div>
<?php endif; ?>