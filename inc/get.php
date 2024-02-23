<h1>Subscribe Form</h1>

<div class="form-container">
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="John Doe" required>
        <small style="color: red;"><?php if (isset($ERROR["name"]))
            echo $ERROR["name"]; ?></small>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="example@mail.com" required>
        <small style="color:red;"><?php if (isset($ERROR["email"]))
            echo $ERROR["email"]; ?></small>

        <input type="submit" value="Subscribe">
    </form>
</div>
<br>
<br>