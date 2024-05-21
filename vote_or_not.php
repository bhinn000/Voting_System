<html>
<style>
    /* Styling for the form */
    .A {
        background-color: rgb(139, 139, 202);
        color: white;
        border: none;
        padding: 10px;
        font-size: 70px;
        /* Updated font size to 70px */
        border-radius: 5px;
        cursor: pointer;
        width: 25%;
        height: 25%;
        margin: 30px;
    }

    .B {
        background-color: rgb(139, 139, 202);
        color: white;
        border: none;
        padding: 10px;
        font-size: 70px;
        /* Updated font size to 70px */
        border-radius: 5px;
        cursor: pointer;
        width: 25%;
        height: 25%;
        margin: 30px;
    }
</style>

<form method="post">
    <input type="submit" class="A" name="vote_yes" value="Vote Yes">
    <input type="submit" class="B" name="vote_no" value="Vote No">
</form>

</html>

<?php
if (isset($_POST['vote_yes'])) {
    header("location: login_vote.php");
}

if (isset($_POST['vote_no'])) {
    header("location:thank.php");
}
?>