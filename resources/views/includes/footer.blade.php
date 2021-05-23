<style>
    .footer {
        background: rgb(48, 48, 48)
    }
</style>

<footer class="footer">
    <div class="footer-left">
        <ul>
            <a href="#">Главная</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
            <a href="#">Тех поддержка: +7(776)-288-49-55</a>
            <a href="#">Онлайн консультация: +7(776)-288-49-55</a>
        </ul>
    </div>
    <div>
        <h2>SUNQAR AVIALINES</h2>
    </div>
    <div>
        <p style="margin-left:20px">Наш адрес: Казахфильм 8, 88</p>
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