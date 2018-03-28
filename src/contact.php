<form action="send.php" method="POST">

        Client name:
        <input type="text" name="client" required>
        <br>
        Client email:
        <input type="email" name="email" required>
        <br>
        Message:
        <br>
        <textarea name="message" rows="10" cols="50" required></textarea>
        <br>
        <input type="submit" value="Send message">

    </form>