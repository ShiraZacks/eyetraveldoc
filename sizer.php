<script>
function bigger() {
        document.getElementsByClassName('bigger').style.fontSize = "30px";
        console.log("clicked bigger")
    }

function smaller() {
    document.getElementsByClassName('smaller').style.fontSize = "10px";
    console.log("clicked smaller")
    element.getElementsByClassName.style.fontSize = "24px";
}
</script>

<div>
<input type="button" value="bigger" onclick="bigger()">
<input type="button" value="smaller" onclick="smaller()">
<p class="bigger smaller">Font Size</p>
</div>