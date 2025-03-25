<?php include('navbar.php'); ?>

<!-- <p>Create a responsive navigation bar using HTML and CSS.</p> -->
<main>

    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</main>

<?php include('footer.php'); ?>