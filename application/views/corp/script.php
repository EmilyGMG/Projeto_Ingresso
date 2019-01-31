

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="/Content/demo.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.fr-fr.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.bg-bg.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.de-de.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.pt-br.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.ru-ru.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.es-es.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.it-it.js" type="text/javascript"></script>
<script type="text/javascript">
    var datepicker, config;
    config = {
        locale: 'de-de',
        uiLibrary: 'bootstrap4'
    };
    $(document).ready(function () {
        datepicker = $('#datepicker').datepicker(config);
        $('#ddlLanguage').on('change', function () {
            var newLang = $(this).val();
            config.locale = newLang;
            datepicker.destroy();
            datepicker = $('#datepicker').datepicker(config);
        });
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" type="text/javascript"></script>

<script>$(function () {
    var count = 0;
    $('.owl-carousel').each(function () {
        $(this).attr('id', 'owl-demo' + count);
        $('#owl-demo' + count).owlCarousel({
            navigation: true,
            slideSpeed: 100,
            pagination: true,
            singleItem: true,
            autoPlay: 2000,
            autoHeight: true
        });
        count++;
    });
});
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet" type="text/css"/>

</body>
</html>