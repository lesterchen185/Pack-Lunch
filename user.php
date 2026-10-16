<!Doctype html>
<head>
    <title> Pack-Lunches</title>
</head>
<body>
        <form>
            <input type="text" name="forename" placeholder="enter your firstname">
            <input type="text" name="surname" placeholder="enter your surname ">
            <input type="text" name="house " placeholder="enter your house">
            <input type="text"number="year " placeholder="enter your year">
            <input type="text" number="balance " placeholder="enter your balance">
            <input type="text" radio="role " value="student">student
            <input type="text" radio="role " value="teacher">teacher
            <input type="password" name="password">

<button onclick="rollDice()">Roll Dice</button>
<div id="result"></div>

<script>
function rollDice() {
    const words = ["one", "two", "three", "four", "five", "six"];
    const roll = Math.floor(Math.random() * 6);
   
    document.getElementById("result").innerHTML = words[roll];
}
</script>

</body>