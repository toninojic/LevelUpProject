<div class="contact-form">
    <h2>Contact us:</h2>
    <div class="contact-text">
        This is text about contact form
    </div>

    <div class="form">
        <form action="index.php?page=contact" method="POST">
        <p>Full-name:</p>
        <input type="text" name="fullname" placeholder="Enter your full-name">
        <p>Subject:</p>
        <input type="text" name="subject" placeholder="Subject">
        <p>Message:</p>
        <textarea name="message" placeholder="Enter your message" id="text-area"></textarea>
        <div class="error">
            <?php if(count($_POST) > 0) {
                foreach($errors as $error) {
                ?> <li> <?php echo $error; ?> </li> <?php }
                }
                ?>
        </div>
        <input id="login" type="submit" value="Login">
        </form>
    </div>
</div>