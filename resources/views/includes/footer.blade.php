<footer class="footer">
    <div class="footer-left">
        <ul>
            <a href="#">Главная</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
        </ul>
    </div>
    <div>
        <h2>SUNQAR AVIALINES</h2>
    </div>
    <div>
        <div id="map"></div>
    </div>
    </div>
</footer>

<script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [54.98, 82.89],
            zoom: 13
        });
    });
</script>