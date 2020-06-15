    <aside class="asideContainer-2" id="aside2">
      <div class="aside-2-key" id="aside2_key" onclick="pushAsidePanel()">

      </div>

    </aside>
    <script>
function pushAsidePanel() {
var x = document.getElementById('aside2');
var y = document.getElementById('aside2_key');
if (x.style.width == "0%") {
  x.style.width = "10%";
  y.style.right = "200px";
}else {
  x.style.width = "0%";
  y.style.right = "-5px";
}
}

    </script>
